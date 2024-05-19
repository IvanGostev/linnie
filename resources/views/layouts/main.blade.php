<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Линни</title>
{{!isset($active) ? $active = '0' : ''}}
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
{{--        class="animation__wobble"--}}
        <h3>Линни</h3>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark" style="margin-left: 0!important; display: flex!important;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            @if($active == 'problem')
            <li class="nav-item d-sm-inline-block">
                <a href="{{route('problem.create')}}" class="nav-link">Создать заявку</a>
            </li>
            <li class="nav-item d-sm-inline-block">
                <a href="{{route('problem.completed')}}" class="nav-link">Завершенные заявки</a>
            </li>
            @endif
                @if($active == 'document' and auth()->user()->role == 2 )
            <li class="nav-item d-sm-inline-block">
                <a href="{{route('document.create')}}" class="nav-link">Создать документ</a>
            </li>
                @endif
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->

            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline" action="{{route('problem.search')}}">
                        <div class="input-group input-group-sm">
                            <input  value="{{isset(request()->search) ? request()->search : ''}}"  name="search" class="form-control form-control-navbar" type="search" placeholder="Поиск"
                                   aria-label="Search "  style="border-radius: 45px!important; border-top-right-radius: 0!important;
    border-bottom-right-radius: 0!important;">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search" style="border-radius: 45px!important; border-top-left-radius: 0!important;
                                border-bottom-left-radius: 0!important;">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Notifications Dropdown Menu -->
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-bell"></i>--}}
{{--                    <span class="badge badge-warning navbar-badge">15</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--                        <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                        <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item">--}}
{{--                        <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--                        <span class="float-right text-muted text-sm">2 days</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--                </div>--}}
{{--            </li>--}}

        </ul>
    </nav>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0!important;">
        @yield('content')

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer" style="margin-left: 0!important; display: flex ;justify-content: center; padding: 0px" >
        <div class="wrapper-newmenu">
            <div class="navbar-newmenu">
                <a href="{{route('home')}}" class="navitem-newmenu {{$active == 'problem' ? 'active' : ''}}" onclick="select(this)" data-clr="#e4ecfa">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="home"></ion-icon>
                </a>
                <a href="{{route('document.index')}}" class="navitem-newmenu {{$active == 'document' ? 'active' : ''}}" onclick="select(this)" data-clr="#fff6cc">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="documents"></ion-icon>
                </a>
                <a href="{{route('profile.edit', auth()->user()->id)}}" class="navitem-newmenu {{$active == 'profile' ? 'active' : ''}}"  onclick="select(this)" data-clr="#fff6cc">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="person"></ion-icon>
                </a>
                @if(auth()->user()->role == 2) @endif
                <a href="{{route('admin.index')}}" class="navitem-newmenu {{$active == 'settings' ? 'active' : ''}}" onclick="select(this)" data-clr="#f0e4fa">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="cog"></ion-icon>
                </a>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </footer>
    <style>
        body {
            --activeclr: white;
        }

        @property --activeclr {
            syntax: "<color>";
            initial-value: #e4ecfa;
            inherits: true;
        }

        .wrapper-newmenu {
            overflow: hidden;
            width: 22rem;
            background: var(--activeclr);
        }
        .navbar-newmenu {
            display: flex;
            justify-content: space-between;
            height: 4.5rem;
            background: #343a40;
            padding: 0 0.75rem;
            transition: padding 300ms ease;
        }
        .navbar-newmenu:has(.navsearch.active) {
            padding: 0 0.75rem;
        }

        .navitem-newmenu {
            position: relative;
            display: grid;
            place-content: center;
            color: #fff;
            width: 4.5rem;
            text-align: center;
            color: white;
            font-size: 1.5rem;
            transition: width 300ms ease, flex-grow 300ms ease;
        }
        .navbar-newmenu:has(.navsearch.active) .navitem {
            width: 3rem;
        }

        .navitem-newmenu:hover {
            color: gray!important;
        }

        .hoverindicator {
            position: absolute;
            width: 2.5rem;
            inset: 50% auto auto 50%;
            transform: translate(-50%, -50%);
            background: var(--activeclr);
            opacity: 0;
            border-radius: 0.5rem;
            height: 0.25rem;
            inset: auto auto -0.25rem 50%;
            transition: inset 300ms ease, opacity 300ms ease;
        }
        @media (hover: hover) {
            .navitem-newmenu:not(.active):hover .hoverindicator,
            .navsearch:not(.active):hover .searchbox {
                border-radius: 1.25rem;
                height: 2.5rem;
                opacity: 1;
                transition: opacity 150ms ease;
            }
        }

        .active .hoverindicator {
            opacity: 1;
            border-radius: 0.5rem;
            height: 0.25rem;
            inset: auto auto 0.25rem 50%;
            transition: inset 300ms ease, height 300ms ease, border-radius 300ms ease;
        }



        .navsearch.active {
            flex-grow: 1;
        }
        .searchbox {
            position: absolute;
            inset: 1rem;
            background: var(--activeclr);
            border-radius: 1.25rem;
            opacity: 0;
            transition: inset 300ms ease, padding 300ms ease, color 100ms ease, opacity 300ms ease;
            -webkit-appearance: none;
            border: none;
            padding: 0 1rem 0 1rem;
            font-size: 1rem;
            color: transparent;
        }
        .active .searchbox {
            inset: 1rem 0.25rem;
            height: 2.5rem;
            border-radius: 1.25rem;
            padding: 0 2.5rem 0 1rem;
            opacity: 1;
            color: black;
            transition: inset 300ms ease, padding 300ms ease, color 200ms ease 50ms, opacity 300ms ease;
        }


        .searchicon {
            position: absolute;
            inset: 0 0 0 auto;
            width: 4.5rem;
            display: grid;
            place-content: center;
            transition: width 300ms ease;
        }

        .active .searchicon {
            width: 3rem;
        }
    </style>
</div>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
