<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>ООО "ЛИНИИ"</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg')}}" />

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

  <!-- Start Error Area -->
  <div class="maill-success">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="success-content">
            <h1>Потрясающе!</h1>
            <p>Ваше сообщение успешно отправлено, мы <br>свяжемся с вами как можно скорее.</p>
            <div class="button">
              <a href="index.html" class="btn">На Главную</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Error Area -->

  <!-- ========================= JS here ========================= -->
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/wow.min.js')}}"></script>
  <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>
  <script src="{{ asset('assets/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/js/count-up.min.js')}}"></script>
  <script>

    window.onload = function () {
      window.setTimeout(fadeout, 500);
    }

    function fadeout() {
      document.querySelector('.preloader').style.opacity = '0';
      document.querySelector('.preloader').style.display = 'none';
    }
  </script>
</body>

</html>
