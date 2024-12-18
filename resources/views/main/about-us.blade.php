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
                                        <a href="{{ route('main')}}" class="active"
                                           aria-label="Toggle navigation">Главная</a>
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
                                    <li class="btn-login-special nav-item" style="display: none;">
                                        <a href="{{ route('login')}}" aria-label="Toggle navigation">Вход</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="{{ route('login')}}" class="nav-link navbar-text btn">Вход</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">О нас</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Главная</a></li>
                            <li>О нас</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="image wow fadeInLeft" data-wow-delay=".2s">
                        <img src="{{ asset('assets/images/about/about-image.png')}}" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content wow fadeInRight" data-wow-delay=".4s">
                        <h4 align="center">О НАШЕЙ КОМПАНИИ</h4>
                        <p align="justify">Мы занимаемся техническим обслуживанием систем контроля параметров капитального, подземного ремонта и бурения скважин (СКПБ), а также систем технологического видеонаблюдения (СТВ) эксплуатируемые в бригадах по текущему и капитальному ремонту скважин.
                        </br>ООО «ЛИНИИ» на рынке с 2022 года, мы относительно молодая компания, но руководящий состав и технические специалисты выходцы из крупных нефтесервисных компаний, которые имеют большой опыт работы в сферах информационных технологий и связи, контрольно-измерительных приборах и автоматики, энергетики, электронных устройств автомобиля, а так же знания технологических процессов в капитальном и текущем подземном ремонте скважин, что дает преимущество в выполнении поставленных задач не нарушая и не приостанавливая работу бригад ТКРС.</p>
                        <!-- <div class="list">
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Digital Marketing</h4>
                                <p>Quis autem vel eum reprehenderit</p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Graphics Desing</h4>
                                <p>Quis autem vel eum reprehenderit</p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Consulting Service</h4>
                                <p>Quis autem vel eum reprehenderit</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

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
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script>
        //=========== Menu
        function updateMenu() {
            if (window.screen.width < 760) {
                document.querySelector('.btn-login-special').style.display = 'block';
            } else {
                document.querySelector('.btn-login-special').style.display = 'none';
            }
        }
        updateMenu()
        window.addEventListener('resize', function(event) {
            updateMenu()
        }, true);


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


     </script>
</body>

</html>
