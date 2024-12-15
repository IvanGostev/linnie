<!DOCTYPE html>
<html class="no-js" lang="zxx">t-
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
                            <a class="navbar-brand" href="index.html">
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

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Новости</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Главная</a></li>
                            <li>Новости</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Blog Singel Area -->
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="main-content-head">
                                <div class="post-thumbnils">
                                    <img src="{{ asset('assets/images/blog/blog-single.jpg')}}" alt="#">
                                </div>
                                <div class="meta-information">
                                    <h2 class="post-title">Я отвечу как эксперт в области разработки программного обеспечения для нефтяной отрасли,
                                         с опытом в создании систем для мониторинга подъёмных агрегатов.
                                    </h2>
                                    <!-- End Meta Info -->
                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)">By Ковшов Александр</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">27 ноября 2024</a>
                                        </li>
                                    </ul>
                                    <!-- End Meta Info -->
                                </div>
                                <div class="detail-inner">
                                    <p>Мы стремимся повысить эффективность работы нефтяной промышленности,
                                        предлагая высококачественные ПО и аналитические инструменты для оптимизации
                                        производственных процессов.</p>
                                    <p>Мониторинг состояния агрегатов: Наши программные решения позволяют отслеживать
                                        состояние подъёмных агрегатов в реальном времени,
                                        предоставляя данные о производительности и расходах.
                                        Диагностика и предупреждение неполадок: Инструменты диагностики позволяют
                                        выявлять потенциальные проблемы, что помогает избежать дорогостоящих простоев.</p>
                                    <h3>Технологии
                                    </h3>
                                    <div class="image-block">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <img src="{{ asset('assets/images/blog/blog-inner1.jpg')}}" alt="#">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <img src="{{ asset('assets/images/blog/blog-inner2.jpg')}}" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Мы применяем передовые технологии, такие как IoT (Интернет вещей),
                                        искусственный интеллект и облачные вычисления для создания интеллектуальных систем управления,
                                        которые интегрируются как с новым оборудованием, так и с уже существующими.

                                    </p>
                                    <h3>Партнёрство
                                    </h3>
                                    <p>Мы активно сотрудничаем с нефтяными
                                        производителями и оборудованием для создания индивидуальных
                                        решений под их нужды.

                                    </p>
                                    <blockquote>
                                        <div class="icon">
                                            <i class="lni lni-quotation"></i>
                                        </div>
                                        <h4>"Я есть место
                                            для
                                            цитат Создателя компании."</h4>
                                        <span>- Ковшов А.П. Заместитель генерального директора</span>
                                    </blockquote>
                                    <h3>Будущее</h3>
                                    <p>В планах компании дальнейшее развитие функционала ПО, включая использование машинного обучения для более эффективного прогнозирования и анализа.
                                        Наша компания ООО "ЛИНИИ" заботится о будущем нефтяной отрасли и стремится сделать её более эффективной с помощью инновационных технологий и программных решений.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Comments -->
                    <div class="post-comments">
                        <h3 class="comment-title"><span>Комментарии</span></h3>
                        <ul class="comments-list">
                            <li>
                                <div class="comment-img">
                                    <img src="{{ asset('assets/images/blog/comment1.jpg')}}" alt="img">
                                </div>
                                <div class="comment-desc">
                                    <div class="desc-top">
                                        <h6>Климов Данил</h6>
                                        <span class="date">28 ноября 2024</span>
                                        <a href="javascript:void(0)" class="reply-link"><i
                                                class="lni lni-reply"></i>Ответить</a>
                                    </div>
                                    <p>
                                        Отличная компания, быстро работают.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Comments -->
                    <!-- Start Comment Form -->
                    <div class="comment-form">
                        <h3 class="comment-reply-title">Оставить комментарий</h3>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-box form-group">
                                        <input type="text" name="name" class="form-control form-control-custom"
                                            placeholder="Имя*" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-box form-group">
                                        <input type="email" name="email" class="form-control form-control-custom"
                                            placeholder="E-mail*" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box form-group">
                                        <textarea name="#" class="form-control form-control-custom"
                                            placeholder="Комментарий*"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button">
                                        <button type="submit" class="btn">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Comment Form -->
                </div>
                <aside class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar">
                        <!-- Start Single Widget -->
                        <div class="widget search-widget">
                            <h5 class="widget-title">Поиск по сайту</h5>
                            <form action="#">
                                <input type="text" placeholder="Поиск ...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="widget popular-feeds">
                            <h5 class="widget-title">Новости компании</h5>
                            <div class="popular-feed-loop">
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Нововведение компании
                                            ЛИНИИ.</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 27 ноября 2024</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Нововведение компании
                                            ЛИНИИ.</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 27 ноября 2024</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="blog-single.html">Нововведение компании
                                            ЛИНИИ.</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i> 27 ноября 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- End Blog Singel Area -->

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
        $(window).resize(function() {
     if(document.documentElement.clientWidth < 1000) {
         document.getElementsByClassName('btn-login-special').style.display = 'block';
     }
 });
 </script>
</body>

</html>
