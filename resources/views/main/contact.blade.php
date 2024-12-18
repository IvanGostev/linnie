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
                        <h1 class="page-title">Контакты</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Главная</a></li>
                            <li>Контакты</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Area -->
    <div class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="contact-widget-wrapper">
                        <div class="main-title">
                            <h2>Контакты</h2>
                        </div>
                        <div class="contact-widget-block">
                            <h3 class="title">Номер</h3>
                            <p>+7 (902)-692-25-55</p>
                        </div>
                        <div class="contact-widget-block">
                            <h3 class="title">Наш E-mail</h3>
                            <p>Lines86@yandex.ru</p>
                        </div>
                        <div class="contact-widget-block">
                            <h3 class="title">Наш адресс</h3>
                            <p>Российская Федерация, 628483</p>
                            <p>ХМАО-Югра, г.Когалым, ул.Повховское шоссе 2А</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <h3 class="form-title">Оставить нам сообщение</h3>
                        <form class="form" method="post" action="{{ asset('assets/mail/mail.php')}}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="name" type="text" placeholder="Имя*" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="email" type="email" placeholder="E-mail*" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="subject" type="text" placeholder="Тема*" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input name="phone" type="text" placeholder="Номер телефона*" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea placeholder="Сообщения*" name="message" id="message-area"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button">
                                        <button type="submit" class="btn ">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Google-map Area -->
    <div class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                src="https://www.google.com/maps/d/embed?mid=1dvKUjppA7wDruQSuUyvHm-_nMWTga8Y&hl=ru&ehbc=2E312F"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google-map Area -->

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
    </script>
</body>

</html>
