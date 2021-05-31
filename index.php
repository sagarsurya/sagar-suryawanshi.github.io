<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" type="text/css" href="/portfolio-sagar-suryawanshi/assets/css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />

        <title>Responsive Portfolio Website</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Sagar
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contact Me
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" class="home__social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>
                            <a href="https://github.com/" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                                    <image class="home__blob-img" x='12' y='18' xlink:href="/portfolio-sagar-suryawanshi/assets/img/sagar_photo.png"/>
                                </g>
                            </svg>
                        </div>
                        <div class="home__data">
                            <h1 class="home__title">Hello, I'm Sagar</h1>
                            <h3 class="home__subtitle">Full Stack Developer</h3>
                            <p class="home__description">High level experiance in Web Designing and Developemt knowledge, producing quality work</p>
                            <a href="#contact" class="button button--flex">
                                Contact Me<i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home__scroll">
                       <a href="#about" class="home__scroll-button button--flex">
                           <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                           <span class="home__scroll-name">Scroll down</span>
                           <i class="uil uil-arrow-down home__scroll-arrow"></i>
                       </a> 
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My Introduction</span>
                <div class="about__container container grid">
                    <img src="/portfolio-sagar-suryawanshi/assets/img/about.jpg" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description">High level experiance in Web Designing and Developemt knowledge, producing quality work</p>

                        <div class="about__info">
                            <div>
                                <span class="about__info-title">02+</span>
                                <span class="about__info-name">Years <br> experience</span>
                            </div>

                            <div>
                                <span class="about__info-title">20+</span>
                                <span class="about__info-name">Completed <br> project</span>
                            </div>

                            <div>
                                <span class="about__info-title">03+</span>
                                <span class="about__info-name">Companies <br> worked</span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a download="" href="/portfolio-sagar-suryawanshi/assets/pdf/SuryawanshiSagar-Resume2021.pdf" class="button button=flex">
                                Download CV<i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>

                <div class="skills__container container grid">
                    <div>
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__titles">Frontend Developer</h1>
                                    <span class="skills__subtitle">More than 2 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_html"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_css"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_js"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_react"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>

                                <div>
                                    <h1 class="skills__titles">Backend Developer</h1>
                                    <span class="skills_subtitle">More than 2 years</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_php"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Node Js</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_node"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Firebase</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_firebase"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__number">80%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills_python"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        
                    </div>
                </div>

            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My Personal Journey</span>
                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target='#education'>
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Education
                        </div>

                        <div class="qualification__button button--flex" data-target='#work' >
                            <i class="uil uil-briefcase-alt qualification__icon"></i>
                            Work
                        </div>
                    </div>

                    <div class="qualification__section">
                        <div class="qualification__content qualification__active" data-content id="education">
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Computer Engineering</h3>
                                    <span class="qualification__subtitle">Pune - University</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div>
                                    
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div>
                                    <h3 class="qualification__title">Web Design</h3>
                                    <span class="qualification__subtitle">Spain - University</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                
                            </div>

                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Web Development</h3>
                                    <span class="qualification__subtitle">Pune - Institute</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div></div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <!-- <span class="qualification__line"></span> -->
                                </div>
                                <div>
                                    <h3 class="qualification__title">Master in PHP and Laravel</h3>
                                    <span class="qualification__subtitle">Pune - University</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                        <div class="qualification__content" data-content id="work">
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Adivid Technologies</h3>
                                    <span class="qualification__subtitle">Pune - University</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div>
                                    
                                </div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div>
                                    <h3 class="qualification__title">Web Design</h3>
                                    <span class="qualification__subtitle">Spain - University</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                
                            </div>

                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Web Development</h3>
                                    <span class="qualification__subtitle">Pune - Institute</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <div></div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <!-- <span class="qualification__line"></span> -->
                                </div>
                                <div>
                                    <h3 class="qualification__title">Master in PHP and Laravel</h3>
                                    <span class="qualification__subtitle">Pune - University</span>
                                    <div class="qualification__calender">
                                       <i class="uil uil-calendar-alt "></i>
                                       2013 - 2019
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <h2 class="section__title">Services</h2>
                <span class="section__subtitle">What I offer</span>

                <div class="service__container container grid">
                    <!--==================== SERVICES 1 ====================-->
                    <div class="service__content">
                        <div>
                            <i class="uil uil-web-grid services__icon"></i>
                            <h3 class="service__title">UI/UX <br>Designer</h3>
                        </div>
                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">UI/UX <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Web Page Development</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I create UX element</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I position your company brand</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--==================== SERVICES 2 ====================-->
                    <div class="service__content">
                        <div>
                            <i class="uil uil-arrow services__icon"></i>
                            <h3 class="service__title">Frontend <br>Development</h3>
                        </div>
                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Frontend <br>Development</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Web Page Development</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I create UX element</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I position your company brand</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--==================== SERVICES 3 ====================-->
                    <div class="service__content">
                        <div>
                            <i class="uil uil-pen services__icon"></i>
                            <h3 class="service__title">Branding <br>Designer</h3>
                        </div>
                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Branding <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>

                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I develop the User Interface</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Web Page Development</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I create UX element</p>
                                    </li>
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I position your company brand</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                

            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">


            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                

            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">


            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">

            
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        

        <!--==================== SWIPER JS ====================-->
        <script src=""></script>

        <!--==================== MAIN JS ====================-->
        <script src="/portfolio-sagar-suryawanshi/assets/js/main.js?version=<?= time() ?>"></script>
    </body>
</html>