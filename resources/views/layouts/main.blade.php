<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Линии</title>
    <meta {{!isset($active) ? $active = '0' : ''}}>

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
        <h3>ЛИНИИ</h3>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark" style="margin-left: 0!important; display: flex!important;  font-size: 14px!important; justify-content: space-between; flex-wrap: wrap;
">
        <ul class="navbar-nav navbar-nav-f align-items-start">
            @if($active == 'problem')
                @if(auth()->user()->role != 2)
                    <li class="nav-item d-sm-inline-block pr-1">
                        <a class="btn btn-dark btn-block" href="{{route('problem.create')}}">Создать заявку</a>
                    </li>
                @endif
                @if(auth()->user()->role > 1)
                    <li class="nav-item d-sm-inline-block pr-1">
                        <a href="{{route('problem.completed')}}" class="btn btn-dark btn-block">Завершенные заявки</a>
                    </li>
                @endif
            @endif
            @if($active == 'document' and auth()->user()->role == 2 )
                <li class="nav-item d-sm-inline-block pr-1">
                    <a href="{{route('document.create')}}" class="btn btn-dark btn-block">Создать документ</a>
                </li>
            @endif
                @if($active == 'note' and auth()->user()->role != 0 )
                    <li class="nav-item d-sm-inline-block pr-1">
                        <a href="{{route('note.create')}}" class="btn btn-dark btn-block">Создать заметку</a>
                    </li>
                @endif
        </ul>

        <!-- Navbar Search -->

                <a class="nav-link logo-linii" style=" text-decoration: none; color: white; align-self: center; position: absolute; left: 45.5%; top: 0;" href="#" role="button">
                    <h5 class="nav-link"><img width="15px" src="/logo-ll.png" alt=""> ЛИНИИ</h5>
                </a>


            {{----}}


        <ul class="navbar-nav  align-items-end">
            <!-- Navbar Search -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="{{route('notification.readAll')}}">
                    <i class="far fa-bell"></i>
                    @if(notificationsCount() > 0)
                        <span class="badge badge-warning navbar-badge">{{notificationsCount()}}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"  >
                    <a href="{{route('notification.readAll')}}" class="dropdown-item dropdown-header">Пометить как прочитанное</a>
                    @foreach(notifications() as $notification)
                        @switch($notification['type'])
                            @case('work')
                                <div class="dropdown-divider"></div>
                                <a href="{{route('problem.show', $notification->problem()->id)}}" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2" ></i>Заявку {{$notification->problem()->id}} взял в работу {{$notification->name}}
                                </a>
                                @break;
                            @case('completed')
                                <div class="dropdown-divider"></div>
                                <a href="{{route('report.show', $notification->problem()->id)}}" class="dropdown-item">
                                    <i class="fas fa-envelope mr-2" ></i>{{$notification->name}} сдал отчет по заявке {{$notification->problem()->id}}
                                </a>
                                @break;
                            @case('documents')
                                <div class="dropdown-divider"></div>
                                <a href="{{route('document.index')}}" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i> Документы обновлены
                                </a>
                                @break;
                            @case('mydocuments')
                                <div class="dropdown-divider"></div>
                                <a href="{{route('profile.edit', auth()->user()->id)}}" class="dropdown-item">
                                    <i class="fas fa-file mr-2"></i>Мои документы обновлены
                                </a>
                                @break;
                        @endswitch
                    @endforeach
                    <a href="{{route('notification.index')}}" class="dropdown-item dropdown-footer">Смотреть все уведомления</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block" style="width: 338px; ">
                    <form class="form-inline" action="{{route('problem.search')}}">
                        <div class="input-group input-group-sm">
                            <input value="{{isset(request()->search) ? request()->search : ''}}" name="search"
                                   class="form-control form-control-navbar searchheaderbox" type="search"
                                   placeholder="Поиск"
                                   aria-label="Search " style="border-radius: 45px!important; border-top-right-radius: 0!important;
    border-bottom-right-radius: 0!important; width: 180px; ">
                            <div class="input-group-append " style="right: 2px!important;">
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


        </ul>
    </nav>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0!important;">
        {{--<br>--}}

        @yield('content')

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer" style="margin-left: 0!important; display: flex ;justify-content: center; padding: 0px;">
        <div class="wrapper-newmenu">
            <div class="navbar-newmenu">
                <a href="{{route('home')}}" class="navitem-newmenu {{$active == 'problem' ? 'active' : ''}}"
                   onclick="select(this)" data-clr="#e4ecfa">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="home"></ion-icon>
                </a>
                <a href="{{route('document.index')}}" class="navitem-newmenu {{$active == 'document' ? 'active' : ''}}"
                   onclick="select(this)" data-clr="#fff6cc">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="documents"></ion-icon>
                </a>
                <a href="{{route('profile.edit', auth()->user()->id)}}"
                   class="navitem-newmenu {{$active == 'profile' ? 'active' : ''}}" onclick="select(this)"
                   data-clr="#fff6cc">
                    <div class="indicator"></div>
                    <div class="hoverindicator"></div>
                    <ion-icon name="person"></ion-icon>
                </a>
                @if(auth()->user()->role == 2)
                    <a href="{{route('admin.index')}}" class="navitem-newmenu {{$active == 'settings' ? 'active' : ''}}"
                       onclick="select(this)" data-clr="#f0e4fa">
                        <div class="indicator"></div>
                        <div class="hoverindicator"></div>
                        <ion-icon name="cog"></ion-icon>
                    </a>
                @endif

            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </footer>


</div>
<style>
    @media (max-width: 800px) {
        .searchheaderbox {
            max-width: 100% !important;
        }

        .navbar-search-block {
            width: 100% !important;
        }
        .logo-linii {
            left: {{!($active == 'document' or $active == 'problem') ? '34' : '45.5'}}%!important;
        }
        /*.navbar-nav-f li {*/
        /*    display: none;*/
        /*}*/
        .nonle {
            display: none !important;
        }

    }

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
        color: gray !important;
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

    .navbar-search-block {
        left: auto;
</style>

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
<script>
    $('[data-widget="navbar-search"]').click(function () {
        console.log(11);
        $('.navbar-nav-f li').toggleClass('nonle')
    })
</script>
</body>
</html>
