<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ООО "ЛИНИИ"</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.3.0.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}" />

</head>
<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('assets/images/logo/white-logo.png')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('main')}}" class="active" aria-label="Toggle navigation">Главная</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about')}}" aria-label="Toggle navigation">О нас</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('news')}}">Новости</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact')}}" aria-label="Toggle navigation">Контакты</a>
                                    </li>
                                    <li class="btn-login-special" style="display: none;">
                                        <a href="{{ route('login')}}" aria-label="Toggle navigation">Вход</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="{{ route('login')}}" class="btn">Вход</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">Техническое обслуживание систем контроля.</h4>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">ЛИНИИ</h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Компания иновационных технологий.
                        </br>Работаем на рынке более 2-ух лет.
                        </p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="about-us.blade.php" class="btn ">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="hero-image">
                        <img class="main-image" src="{{ asset('assets/images/hero/hero-image.png')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Services Area -->
    <div class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Что мы предлагаем?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Наши услуги</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Все, что вам понадобится, мы вам обеспечим.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-grid-alt"></i>
                        </div>
                        <h4 class="text-title">Инженерные услуги</h4>
                        <p>Проектирование, монтаж и техническое обслуживание.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-keyword-research"></i>
                        </div>
                        <h4 class="text-title">Техническое соответствие</h4>
                        <p>Техническое обслуживание, приведение в соответствие с действующими ФЗ, регламентами к единому стандарту.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-vector"></i>
                        </div>
                        <h4 class="text-title">Электромонтаж</h4>
                        <p>Электромонтажные работы: </br>электрификация зданий, сооружений и систем освещения.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Portfolio Area-->
    <section class="portfolio-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">РАБОТА</h3>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Здесь вы можете</br>Ознакомиться с некоторыми из наших работ.</p>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item branding marketing">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/images/portfolio/pf-6.jpg')}}" alt="">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span>Разработка</span>
                                <h4>Программное обеспечение</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item marketing graphic">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/images/portfolio/pf-6.jpg')}}" alt="">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span>Разработка</span>
                                <h4>Программное обеспечение</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item branding">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/images/portfolio/pf-6.jpg')}}" alt="">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span>Разработка</span>
                                <h4>Программное обеспечение</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item web">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/images/portfolio/pf-6.jpg')}}" alt="">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span>Разработка</span>
                                <h4>Программное обеспечение</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item graphic">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/images/portfolio/pf-6.jpg')}}" alt="">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span>Разработка</span>
                                <h4>Программное обеспечение</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item web">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/images/portfolio/pf-6.jpg')}}" alt="">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span>Разработка</span>
                                <h4>Программное обеспечение</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Area-->

    <!-- Start Intro Video Area -->
    <section class="intro-video-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-head">
                        <div class="inner-content">
                            <img class="shape1" src="{{ asset('assets/images/video/shape1.svg')}}" alt="#">
                            <img class="shape2" src="{{ asset('assets/images/video/shape2.svg')}}" alt="#">
                            <div class="section-title">
                                <span class="wow zoomIn" data-wow-delay=".2s">Получите свой собственный опыт с нами.</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">Наше вступительное видео</h2>
                            </div>
                            <div class="intro-video-play">
                                <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                    <a href="-"
                                        class="glightbox video"><i class="lni lni-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Video Area -->

    <!-- Start Blog Section Area -->
    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">БЛОГ</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Посмотрите наши новости.</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">В данном разделе Вы можете ознакомится с новостями компании.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 27 ноября 2024
                                </a>
                            </div>
                            <h4>
                                <a href="blog-single.html">Нововведение.</a>
                            </h4>
                            <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan tincidunt.</p>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Blog -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 27 ноября 2024
                                </a>
                            </div>
                            <h4>
                                <a href="blog-single.html">Нововведение.</a>
                            </h4>
                            <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan tincidunt.</p>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 27 ноября 2024
                                </a>
                            </div>
                            <h4>
                                <a href="blog-single.html">Нововведение.</a>
                            </h4>
                            <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan tincidunt.</p>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section Area -->

    <!-- Start Clients Logo Area -->
    <div class="client-logo bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="{{ asset('assets/images/client-logo/graygrids-logo.svg')}}" alt="#">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="{{ asset('assets/images/client-logo/lineicons-logo.svg')}}" alt="#">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="{{ asset('assets/images/client-logo/WellTech.png')}}" alt="#">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="{{ asset('assets/images/client-logo/uideck-logo.svg')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Logo Area -->

    <!-- Start Footer Area -->
    <footer class="footer section">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/images/logo/white-logo.png')}}" alt="#">
                                    </a>
                                </div>
                                <p>Динамика развития в сотрудничестве.</p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Поддержка</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Документация</a></li>
                                    <li><a href="javascript:void(0)">Поддержка</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer newsletter">
                                <h3>Связаться</h3>
                                <p>Связь с нами проходит по средствам почты.</p>
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="E-mail адрес" required="required" type="email">
                                    <div class="button">
                                        <button class="sub-btn"><i class="lni lni-envelope"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->

        <!-- Start Copyright Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <p class="copyright-text">© 2024 - ledokolov, All Right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/js/count-up.min.js')}}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script>

        //========= testimonial
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //====== counter up
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //============== isotope masonry js with imagesloaded
        imagesLoaded('#container', function () {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                }
            });

            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e =>
                e.addEventListener('click', () => {

                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                })
            );
        });



    $(window).resize(function() {
        if(document.documentElement.clientWidth < 1000) {
            document.getElementsByClassName('btn-login-special').style.display = 'block';
        }
    });
    </script>
</body>

</html>
