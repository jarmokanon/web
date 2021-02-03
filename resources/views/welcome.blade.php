<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio Jarmo Kanon</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">JARMO'S PORTFOLIO.</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>JARMO</span><br><span>KANON.</span></h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Naar beneden</a>
                    </div>

                    <img src="assets/img/perfil.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/perfil.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">Ik ben Jarmo Kanon</h2>
                        <span class="about__profession">Web developer</span>
                        <p class="about__text">Ik ben 18 jaar. Student webdeveloper, op het Grafisch Lyceum Utrecht. Ik vind het heel leuk om bezig te zijn met projecten, ik vind vooral front-end heel leuk om te doen.</p>
                        <p class="about__text">Ik heb een TL (mavo) diploma gehaald op het Oosterlicht College Vianen. Daarna ben ik de drie jarige opleiding "webdeveloper" gaan doen op het Grafisch Lyceum Utrecht. Dit is een mbo niveau 4 opleiding.</p>
                        <p class="about__text">Als ik iets interessant of leuk vind dan kan ik mijzelf daar echt enorm in verdiepen totdat ik er alles van weet of kan. Ik denk dat dat wel een goede eigenschap van mijzelf is.</p>


                        <div class="about__social">
                            <a href="https://github.com/jarmokanon/web.git" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-instagram' ></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">Html</span>
                        <span class="skills__name">Css</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">Scss</span>
                        <span class="skills__name">PHP</span>
                        <span class="skills__name">Python</span>
                        <span class="skills__name">Laravel</span>
                        <span class="skills__name">Django</span>
                        
                        <h3 class="skills__subtitle">Design</h3>
                        <span class="skills__name">Photoshop</span>
                    </div>

                    <div class="skills__img">
                        <img src="assets/img/skill.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Portfolio</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="assets/img/work1.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="" class="portfolio__link-name">Project hotel webiste.</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work2.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Webshop project.</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work3.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Project over PhotoShop poster. </a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work4.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Website kapper. </a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work5.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Oude portfolio website. </a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work6.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Ticket systeem met admin-panel. </a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/work6.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">Ticket systeem met admin-panel. </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">jarmokanon@hotmail.com</span>


                        <h3 class="contact__subtitle">ADRESS</h3>
                        <span class="contact__text">The Netherlands</span>
                    </div>

                    <!-- <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeholder="Name" class="contact__input">
                            <input type="mail" placeholder="Email" class="contact__input">
                        </div>

                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>

                        <input type="submit" value="Enviar" class="contact__button">
                    </form> -->
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">JARMO KANON</h2>
                    <p class="footer__text">Ik ben Jarmo Kanon en dit is mijn portfolio webiste.</p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#skills" class="footer__link">Skills</a></li>
                        <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                        <li><a href="#Contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="https://github.com/jarmokanon" class="footer__social"><i class='bx bxl-github' ></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-linkedin' ></i></a>
                </div>


            </div>
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
