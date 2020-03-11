<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.11.6, mobirise.com">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{env('APP_URL')}}/assets/images/up-536x536.png" type="image/x-icon">
    <meta name="description" content="">

    <title>Qualification | University Of Phayao</title>

    <!-----fonts--->
    <link href="https://fonts.googleapis.com/css?family=Krub:500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    



    <!-- mobirise -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/web/{{env('APP_URL')}}/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/tether/tether.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/theme/css/style.css">
  <link rel="preload" as="style" href="{{env('APP_URL')}}/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="{{env('APP_URL')}}/assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  

  <script rel="stylesheet" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">



    <!-- Styles -->
    
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    กลับหน้าหลัก
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- mobirise -->
    <script src="{{env('APP_URL')}}/assets/web/{{env('APP_URL')}}/assets/jquery/jquery.min.js"></script><script src="{{env('APP_URL')}}/assets/web/{{env('APP_URL')}}/assets/jquery/jquery.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/popper/popper.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/dropdown/js/nav-dropdown.js"></script>
    <script src="{{env('APP_URL')}}/assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="{{env('APP_URL')}}/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="{{env('APP_URL')}}/assets/tether/tether.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/parallax/jarallax.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/datatables/jquery.data-tables.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/datatables/data-tables.bootstrap4.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/theme/js/script.js"></script>
    <script src="{{env('APP_URL')}}/assets/formoid/formoid.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
  

</body>
</html>
