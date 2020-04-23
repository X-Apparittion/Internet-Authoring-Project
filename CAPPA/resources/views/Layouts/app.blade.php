<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CAPPAA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico"> 
  

    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   
    <!-- Styles -->
        <link href="/CSS/app.css" rel="stylesheet">
        <link href="/CSS/css/uikit.min.css" rel="stylesheet">
        <link href="/CSS/main.css" rel="stylesheet">
        <script src="/CSS/js/uikit.min.js"></script>
        <script src="/CSS/js/uikit-icons.min.js"></script>
</head>
<body>
        <!-- Mobile Nav -->
        <nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@m" id="moblie-nav" uk-sticky>
            <div class="uk-navbar-center">
               <img src="/img/logo.png" width="150px" alt="CAPPA_LOGO">
            </div>
              
            <div class="uk-navbar-left" >
                <a class="uk-navbar-toggle uk-active" id="#bg4"  href="#"  uk-toggle="target: #offcanvas-usage">
                    <span  uk-navbar-toggle-icon></span>
                </a>
            </div>

            <div id="offcanvas-usage"uk-offcanvas>
                <div class="uk-offcanvas-bar" id="sidenav" >

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <br><br>

                   <br><br>
                   <ul class="uk-nav uk-nav-default">

                        <li>
                                <a  href="{{ URL::to('/') }}">HOME</a>
                        </li>

                        <li class="uk-active">
                                <a  href="{{ url('/CrimePost') }}">BLOG</a>
                        </li>

                        <br>
                        <li class="uk-nav-divider"></li>
                        <br>

                        @guest
                            <li  class="uk-active">
                                 <a href="{{ url('/login') }}">{{ __('Login') }}</a> 
                            </li>

                            @if (Route::has('register'))
                                <li  class="uk-active">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li>
                                <a>{{ Auth::user()->name }} <span></span></a>

                                <div>
                                        <li class="uk-active">
                                                <a  href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                    </div>
                            </li>
                        @endguest
                    </ul>
            


                </div>
            </div>

        </nav>
        <!-- Mobile Nav -->
        
        <!-- Desktop Nav -->
        <nav class="uk-navbar-container uk-visible@l" id="NAV_BG" uk-navbar>

                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                    <li>
                        <a href="{{ url('/') }}">
                            <img src="/img/logo.png" width="175px" alt="CAPPA_LOGO">
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav">
                    @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li>
                                <a>{{ Auth::user()->name }} <span></span></a>

                                <div>
                                        <li class="uk-active">
                                                <a  href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                    </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
        <!-- Desktop Nav -->

        <div>
        @yield('content')    
        </div>
</body>
</html>