<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="/js/app.js" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    
        <link rel="stylesheet" href="/myAdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/myAdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/myAdminLTE/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/myAdminLTE/dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="/myAdminLTE/dist/css/skins/_all-skins.min.css">

        <!-- Google Font -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            
    </head>
    <body class="skin-red-light">
        <div class="wrapper">
            <header class="main-header">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="logo">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class="logo-mini"><b>SFDevQueen</b></span>
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg"><b>SFDevQueen</b></span>
                    </a>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class="navbar navbar-static-top">
                        <!-- Sidebar toggle button-->
                        {{-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </a> --}}
                    
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Survey</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dash">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://github.com/Highlyne/sfdevqueen-warehouse" target="_blank">GitHub</a>
                                </li>
                                {{-- <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else --}}
                                    
                                    
                                        <!-- User Account: style can be found in dropdown.less -->
                                {{-- <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        
                                        <span class="hidden-xs">{{ Auth::user()->name }} <span class="caret"></span></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        
                                        <p>{{ Auth::user()->name }}</p>
                                        </li>
                                        <!-- Menu Body -->
                                        <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center"></div>
                                            <div class="col-xs-4 text-center"></div>
                                            <div class="col-xs-4 text-center">
                                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                        </li>
                                        
                                    </ul>
                                </li>
                                @endguest --}}
                            </ul>
                        </div>
                    </nav>
                </header>

            {{-- Main Content --}}
            <main>
                <div class="container">
                @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>
