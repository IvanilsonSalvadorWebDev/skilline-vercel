import './bootstrap';

// resources/js/app.js

import './bootstrap'; // Linha padrão do Laravel/Vite

// 💡 Sua função para o menu móvel deve ir aqui para ser gerenciada pelo Vite
window.toggleMenu = function() {
    const navMenu = document.getElementById('navMenu');
    if (navMenu) {
        navMenu.classList.toggle('open');
    }
}

// Exemplo de lógica simples de validação no app.js
document.addEventListener('DOMContentLoaded', () => {
    const emailInput = document.querySelector('.email-input');

    if (emailInput) {
        emailInput.addEventListener('input', function() {
            // Regex simples para verificar o formato básico
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (emailRegex.test(this.value)) {
                this.style.borderColor = 'green';
                // Adicione uma mensagem de sucesso, se necessário
            } else {
                this.style.borderColor = 'red';
                // Adicione uma mensagem de erro, se necessário
            }
        });
    }
});

// Mantém a sua função toggleMenu()
window.toggleMenu = function() {
    // ...
}

// resources/js/app.js
import validator from 'validator';

document.addEventListener('DOMContentLoaded', () => {
    const emailInput = document.querySelector('.email-input');

    if (emailInput) {
        emailInput.addEventListener('input', function() {
            // Usando a função isEmail da biblioteca
            if (validator.isEmail(this.value)) {
                this.style.borderColor = 'blue';
            } else {
                this.style.borderColor = 'orange';
            }
        });
    }
});

// Sua função toggleMenu() e outras...
window.toggleMenu = function() {
    // ...
}


// resources/js/app.js

import './bootstrap'; // Importa dependências base do Laravel/Vite

// =======================================================
// LÓGICA DO MENU MÓVEL
// (Função que estava no seu HTML e foi movida para o JS)
// =======================================================
window.toggleMenu = function() {
    const navMenu = document.getElementById('navMenu');
    if (navMenu) {
        navMenu.classList.toggle('open');
    }
}

// =======================================================
// LÓGICA DA NEWSLETTER (AJAX E POP-UP)
// =======================================================
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('newsletterForm');
    
    // Elementos do Modal/Pop-up
    const modal = document.getElementById('successModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');

    // Função para exibir o modal com a mensagem e cor corretas
    const showModal = (title, message, color) => {
        modalTitle.textContent = title;
        modalTitle.style.color = color;
        modalMessage.textContent = message;
        modal.style.display = 'flex';
    };
    
    // Função de fechamento do modal (útil para o botão de fechar)
    window.closeModal = () => {
        modal.style.display = 'none';
    };


    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault(); // Impede o envio tradicional (recarregamento da página)
            
            const formData = new FormData(this);
            const emailInput = this.querySelector('[name="email"]');
            
            // Estilo inicial antes da requisição
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.textContent = 'Enviando...';
            emailInput.style.borderColor = ''; // Limpa o estado visual anterior
            modal.style.display = 'none'; // Esconde o modal caso esteja aberto

            try {
                // Envio dos dados via fetch
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        // Laravel precisa deste cabeçalho para diferenciar de requisições web normais
                        'X-Requested-With': 'XMLHttpRequest', 
                    }
                });

                const data = await response.json();
                
                if (response.ok) {
                    // CÓDIGO 200/201 (SUCESSO)
                    showModal("Inscrição Realizada!", data.message, "#4CAF50");
                    emailInput.value = ''; // Limpa o campo
                } else if (response.status === 422) {
                    // CÓDIGO 422 (ERRO DE VALIDAÇÃO DO LARAVEL)
                    const errorMessage = data.errors.email ? data.errors.email[0] : 'Erro de validação, tente novamente.';
                    showModal("Erro na Inscrição", errorMessage, "#FF0000");
                    emailInput.style.borderColor = 'red';
                } else {
                    // OUTROS ERROS (500, etc.)
                    showModal("Erro Interno", data.message || "Ocorreu um erro desconhecido no servidor.", "#FF0000");
                }

            } catch (error) {
                console.error('Erro de rede:', error);
                showModal("Erro de Conexão", 'Não foi possível conectar ao servidor. Verifique sua rede.', "#FF0000");
            } finally {
                // Executado independentemente do sucesso ou falha
                submitButton.disabled = false;
                submitButton.textContent = 'Subscribe'; // Restaura o texto do botão
            }
        });
    }
});