<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery_min.js') }}"></script>
    {{-- --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- --}}
    <title>{{ config('app.name', 'MagicLegion') }}</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg   fixed-top" style="background-color:blueviolet !important;color:orange important;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/giphy.webp') }}" height="40px" width="40px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Overview<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="{{ url('/')}}"> <img src="{{ asset('img/gear.jpg') }}" height="90px" width="90px" alt=""></a>
>>>>>>> 40b9e9b612a9ca3253550e28b55495205bac6a6c
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
<<<<<<< HEAD
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
=======
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('finder.index') }}">
                                    <span class="btn badge badge-pill badge-light">
                                        {{ __('Card Finder') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="btn badge badge-pill badge-light">
                                    {{ Auth::user()->name }} / {{ Auth::user()->type }} </span>
                                    <span class="caret"></span>
>>>>>>> 40b9e9b612a9ca3253550e28b55495205bac6a6c
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
<<<<<<< HEAD
                                        {{ __('Logout') }}
=======
                                        
                                        {{ __('Logout') }}
                                        </span>
>>>>>>> 40b9e9b612a9ca3253550e28b55495205bac6a6c
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
<<<<<<< HEAD
                    </ul>
                </div>
              </nav>
    @yield('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div>
          </nav>
</body>
</html>
=======
        
    
    </nav>
    <br/><br/><br/><br/><br/><br/>
        <main class="py-4">
            @yield('content')
        </main>
    
</body>
</html>
>>>>>>> 40b9e9b612a9ca3253550e28b55495205bac6a6c
