<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CAPPA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
  
<nav class="uk-navbar-container" id="NAV_BG" uk-navbar>

        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
               <li>
                   <a class="" href="{{ url('/') }}">
                       <img src="/img/logo.png" width="150px" alt="CAPPA_LOGO">
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
   @yield('content')         
</body>
</html>