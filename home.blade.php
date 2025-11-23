<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilline</title>

    {{-- 💡 O Vite irá processar e incluir o seu app.css (e app.js, se existir) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- 💡 Script Externo (GSAP) usando a função asset() ou diretamente se for CDN --}}
    {{-- Se o GSAP for um arquivo local na pasta public, use asset(). Se for CDN, use a URL direta. --}}
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js" defer></script>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="logo">
            {{-- 💡 Uso de asset() para as imagens --}}
            <img src="{{ asset('assets/img/logo.png') }}" class="heroBack" alt="Skilline logo">
        </div>

        <div class="nav_right_links">
          <nav class="nav" id="navMenu">
            <a href="#">Home</a>
            <a href="#">Careers</a>
            <a href="#">Blog</a>
            <a href="#">About us</a>
        </nav>

        <div class="auth-buttons">
            <button class="login">Login</button>
            <button class="signup">Sign Up</button>
        </div>
        </div>
        
        <div class="menu-mobile" onclick="toggleMenu()">
            ☰
        </div>
    </div>
</header>


<section class="hero">
    <div class="hero-text">
        <h1><span>Studying</span> Online is now<br> much easier</h1>
        <p>Skilline is an interesting platform that will teach you in a more interactive way.</p>

        <div class="hero-buttons">
            <button class="btn-primary">Join for free</button>
            <button class="btn-secondary"><span class="info-play-btn2"> ▶</span> Watch how it works</button>
        </div>
    </div>

    <div class="hero-image">
        <img src="{{ asset('assets/img/header-pic.png') }}" alt="Student smiling holding books">
    </div>
</section>


<section class="trusted">
    <p class="trusted-text">Trusted by 5,000+ Companies Worldwide</p>

    <div class="logos">
        <img src="{{ asset('assets/img/google-2015 1.png') }}" alt="Google logo">
        <img src="{{ asset('assets/img/netflix-3 1.png') }}" alt="Netflix logo">
        <img src="{{ asset('assets/img/airbnb 1.png') }}" alt="Airbnb logo">
        <img src="{{ asset('assets/img/amazon-2 (1) 1.png') }}" alt="Amazon logo">
        <img src="{{ asset('assets/img/facebook.png') }}" alt="Facebook logo">
        <img src="{{ asset('assets/img/grab-logo.png') }}" alt="Grab logo">
    </div>
</section>


<section class="all-in-one">
    <h2>All-In-One Cloud Software.</h2>
    <p class="description">Skilline is one powerful online software suite that combines all the tools needed to run a successful school or office.</p>

    <div class="features">
        <div class="feature-card">
            <div class="icon">
                <img src="{{ asset('assets/img/blue.png') }}" width="" alt="Billing icon">
            </div>
            <h3>Online Billing, Invoicing, & Contracts</h3>
            <p>Simple and secure control of your organization’s financial and legal transactions. Send customized invoices and contracts.</p>
        </div>

        <div class="feature-card">
            <div class="icon">
                {{-- ⚠️ Corrigi o caminho da imagem de `icon2.png` para `assets/img/icon2.png` (Assumindo que está em public/assets/img) --}}
                <img src="{{ asset('assets/img/icon2.png') }}" alt="Calendar icon">
            </div>
            <h3>Easy Scheduling & Attendance Tracking</h3>
            <p>Schedule and reserve classrooms at one campus or multiple campuses. Keep detailed records of student attendance.</p>
        </div>

        <div class="feature-card">
            <div class="icon">
                {{-- ⚠️ Corrigi o caminho da imagem de `icon3.png` para `assets/img/icon3.png` (Assumindo que está em public/assets/img) --}}
                <img src="{{ asset('assets/img/icon3.png') }}" alt="Customer tracking icon">
            </div>
            <h3>Customer Tracking</h3>
            <p>Automate and track emails to individuals or groups. Skilline’s built-in system helps organize your organization.</p>
        </div>
    </div>
</section>

<section class="bloc-skill">
  <div class="bloc-skill__wrapper">
    <h2 class="bloc-skill__title">
      What is <span class="bloc-skill__title-highlight">Skilline?</span>
    </h2>

    <p class="bloc-skill__subtitle">
      Skilline is a platform that allows educators to create online classes whereby they can
      store the course materials online; manage assignments, quizzes and exams; monitor
      due dates, grade results and provide students with feedback all in one place.
    </p>

    <div class="bloc-skill__cards">
      <article class="skill-card">
        <img
          src="{{ asset('assets/img/skilline1.jpg') }}"
          alt="For instructors"
          class="skill-card__image"
        />
        <div class="skill-card__overlay skill-card__overlay--left">
          <h3 class="skill-card__heading">FOR INSTRUCTORS</h3>
          <button class="skill-card__btn skill-card__btn--light">
            Start a class today
          </button>
        </div>
      </article>

      <article class="skill-card">
        <img
          src="{{ asset('assets/img/skilline2.jpg') }}"
          alt="For students"
          class="skill-card__image"
        />
        <div class="skill-card__overlay skill-card__overlay--right">
          <h3 class="skill-card__heading">FOR STUDENTS</h3>
          <button class="skill-card__btn skill-card__btn--primary">
            Enter access code
          </button>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="section-info" id="section-info">
    <div class="info-bottom">
        <div class="info-bottom__text">
            <h2 class="info-bottom__title">
                Everything you can do in a physical classroom, you can do with <span class="info-highlight">Skilline</span>
            </h2>
            <p class="info-bottom__desc">
                Skilline's school management software helps traditional and online schools manage scheduling, attendance, payments and virtual classrooms all in one secure cloud-based system.
            </p>
            <a href="#" class="info-bottom__link">Learn more</a>
        </div>

        <div class="info-bottom__image">
          <iframe width="600" style="border-radius: 4em;" class="iframe_video" height="420" src="https://www.youtube.com/embed/VomOzeE7Z-k?si=3LGHq6aSbNs3wp3R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="section-feature-ui">
    <div class="feature-content">
        <div class="feature-image">
            <img src="{{ asset('assets/img/uorFeatures.png') }}" alt="Interface de usuário de sala de aula virtual com múltiplos participantes.">
        </div>

        <div class="feature-text">
            <h2 class="feature-title">
                A user interface <span class="highlight-text">designed</span><br> for the classroom
            </h2>

            <ul class="feature-list">
                <li class="feature-item">
                    <div class="icon-square icon-blue-orange"></div>
                    <p>Teachers don't get lost in the grid view and have a dedicated **Podium space**.</p>
                </li>
                <li class="feature-item">
                    <div class="icon-square icon-orange-blue"></div>
                    <p>T.A's and presenters can be moved to the **front of the class**.</p>
                </li>
                <li class="feature-item">
                    <div class="icon-square icon-person"></div>
                    <p>Teachers can easily see all students and **class data** at one time.</p>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="section-feature-tools">
    <div class="tools-content">
        <div class="tools-text">
            <h2 class="tools-title">
                <span class="highlight-text">Tools</span> For Teachers<br> And Learners
            </h2>
            <p class="tools-description">
                Class has a **dynamic set of teaching tools** built to be deployed and used during class. Teachers can handout assignments in **real-time** for students to complete and submit.
            </p>
        </div>

        <div class="tools-image">
            <img src="{{ asset('assets/img/tools.png') }}" alt="Estudante pensando e segurando cadernos, cercada por ícones de ferramentas.">
        </div>
    </div>
</section>


<section class="section-assessments">
    <div class="assessments-content">
        <div class="assessment-visual">

                <div class="question-image-container">
                    <img src="{{ asset('assets/img/assessments.png') }}" alt="Cena de Veneza, Itália, com gondoleiros e a igreja Santa Maria della Salute.">
                </div>

        </div>

        <div class="assessments-text">
            <h2 class="assessments-title">
                Assessments,<br> <span class="highlight-text">Quizzes</span>, Tests
            </h2>
            <p class="assessments-description">
                Easily launch live assignments, quizzes, and tests. Student results are automatically entered in the online gradebook.
            </p>
        </div>
    </div>
</section>


<section class="section-double-feature">
    <div class="feature-block block-management">
        <div class="feature-text">
            <h2 class="feature-title">
                <span class="highlight-text">Class Management</span><br> Tools for Educators
            </h2>
            <p class="feature-description">
                Class provides tools to help run and manage the class such as Class Roster, Attendance, and more. With the **Gradebook**, teachers can review and grade tests and quizzes in real-time.
            </p>
        </div>

        <div class="feature-image">
            <img src="{{ asset('assets/img/classManagement.png') }}" alt="Interface de GradeBook mostrando notas dos alunos">
        </div>
    </div>
    
    <div class="feature-block block-discussions">
        <div class="feature-image">
            <img src="{{ asset('assets/img/classManagement2.png') }}" alt="Interface de vídeo chamada com discussão privada">
        </div>

        <div class="feature-text">
            <h2 class="feature-title">
                One-on-One<br> <span class="highlight-text">Discussions</span>
            </h2>
            <p class="feature-description">
                Teachers and teacher assistants can talk with students privately without leaving the Zoom environment.
            </p>
            
        </div>
    </div>
    

      <div class="cta-button-container">
          <a href="#" class="btn-more-features">See more features</a>
      </div>

</section>

<section class="section-integrations">
    <div class="integrations-content">
        <div class="integration-logos">
            <div class="logo-row">
                <div class="logo-item">
                    <img src="{{ asset('assets/img/image2.png') }}" alt="OneDrive logo">
                    <p>OneDrive</p>
                </div>
                <div class="logo-item">
                    <img src="{{ asset('assets/img/image5.png') }}" alt="Dropbox logo">
                    </div>
            </div>
            <div class="logo-row">
                <div class="logo-item">
                    <img src="{{ asset('assets/img/image3.png') }}" alt="Google Drive logo">
                    <p>Google Drive</p>
                </div>
                <div class="logo-item">
                    <img src="{{ asset('assets/img/image6.png') }}" alt="Microsoft Teams logo">
                </div>
            </div>
        </div>

        <div class="integrations-text">
            <p class="subtitle">INTEGRATIONS</p>
            <h2 class="integrations-title">
                200+ educational tools and<br> platform <span class="highlight-text">integrations</span>
            </h2>
            <p class="integrations-description">
                Schoology has every tool your classroom needs and comes pre-integrated with more than 200+ tools, student information systems (SIS), and education platforms.
            </p>
            
            <div class="cta-button-container">
                <a href="#" class="btn-all-integrations">See All Integrations</a>
            </div>
        </div>
    </div>
</section>


<section class="section-testimonials">
    <div class="testimonials-content">
        
        <div class="testimonials-info">
            <p class="subtitle">TESTIMONIAL</p>
            <h2 class="testimonials-title">What They Say?</h2>
            
            <p class="testimonials-description">
                Skilline has got more than **100k positive ratings** from our users around the world.<br>
                Some of the students and teachers were greatly helped by the Skilline.
            </p>
            
            <p class="testimonials-cta">
                Are you too? **Please give your assessment**
            </p>

            <a href="#" class="btn-write-assessment">
                Write your assessment <span class="arrow-icon">→</span>
            </a>
        </div>

        <div class="testimonial-card-visual">
            <img src="{{ asset('assets/img/testimunials.png') }}" alt="Depoimento de Gloria Rose, com foto de uma estudante sorrindo." class="responsive-image">
        </div>
    </div>
</section>


<section class="section-news-resources">
    <div class="news-header">
        <h2 class="news-main-title">Lastest News and Resources</h2>
        <p class="news-subtitle">See the developments that have occurred to Skillines in the world</p>
    </div>

    <div class="news-main-grid">
        <article class="news-card news-card--main">
            <div class="news-image-container">
                <img src="{{ asset('assets/img/zoom.png') }}" alt="Pessoa em laptop participando de uma reunião de videochamada com uma xícara de café ao lado." class="responsive-image">
            </div>
            
            <span class="news-tag">NEWS</span>
            <h3 class="news-title">Class adds $30 million to its balance sheet for a Zoom-friendly edtech solution</h3>
            <p class="news-description">
                Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...
            </p>
            <a href="#" class="news-link">Read more</a>
        </article>

        <div class="news-secondary-list">
            
            <article class="news-card news-card--small">
                <div class="news-image-container news-image-container--small">
                    <img src="{{ asset('assets/img/kidsZoom.webp') }}" alt="Pessoa segurando um tablet com a etiqueta 'PRESS RELEASE'." class="responsive-image">
                </div>
                <div class="news-text-content">
                    <h3 class="news-title">Class Technologies Inc. Closes $30 Million Series A Financing to Meet High Demand</h3>
                    <p class="news-description">Class Technologies Inc., the company that created Class...</p>
                </div>
            </article>

            <article class="news-card news-card--small">
                <div class="news-image-container news-image-container--small">
                    <img src="{{ asset('assets/img/zoom1.jpg') }}" alt="Pessoa vista por trás em frente a um laptop mostrando uma tela de videochamada." class="responsive-image">
                </div>
                <div class="news-text-content">
                    <h3 class="news-title">Zoom’s earliest Investors are betting millions on a better Zoom for schools</h3>
                    <p class="news-description">Zoom was never created to be a consumer product. Nonetheless, the...</p>
                    <span class="news-tag news-tag--small">NEWS</span>
                </div>
            </article>

            <article class="news-card news-card--small">
                <div class="news-image-container news-image-container--small">
                    <img src="{{ asset('assets/img/class-for-zoom.png') }}" alt="Tela de videochamada mostrando pessoas e um cachorro em uma sala de aula online." class="responsive-image">
                </div>
                <div class="news-text-content">
                    <h3 class="news-title">Former Blackboard CEO Raises $16M to Bring LMS Features to Zoom Classrooms</h3>
                    <p class="news-description">This year, investors have reaped big financial returns from betting on Zoom...</p>
                    <span class="news-tag news-tag--small">NEWS</span>
                </div>
            </article>

        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="footer-content">
        <div class="footer-header">
            <div class="footer-logo">
                <img src="{{ asset('assets/img/footerlogo.png') }}" alt="Skilline logo" class="logo-image">
            </div>
            <p class="footer-subtitle">Virtual Class for Zoom</p>
        </div>

        <div class="footer-newsletter">
            <p class="newsletter-title">Subscribe to get our Newsletter</p>
            <form class="newsletter-form" id="newsletterForm" method="POST" action="{{ route('newsletter.subscribe') }}">
    @csrf 
    <input type="email" name="email" placeholder="Your Email" class="email-input" required>
    <button type="submit" class="subscribe-btn">Subscribe</button>
</form>

<button onclick="closeModal()" style="...">Fechar</button>
        </div>

        <div class="footer-bottom">
            <div class="footer-links">
                <a href="#">Careers</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
            <p class="footer-copyright">
                © 2021 Class Technologies Inc.
            </p>
        </div>
    </div>
</footer>



</body>
</html>