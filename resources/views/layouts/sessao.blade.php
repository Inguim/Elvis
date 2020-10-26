<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  'Elvis' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb1af83337.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-lg navbar-dark justify-content-center" id="navbar-central">
            <!-- <div class="container" style="margin: 0; width: 100%"> -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="logo.png" alt="Elvis" style="width: 150px; height: 40px; ">
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
                    <li class="nav-item">
                        <button data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fas fa-bars icon"></i>
                        </button>

                    </li>
                    <li class="nav-item">
                        <a href="{{url('/config')}}"><i class="fas fa-cog icon"></i></a>
                    </li>
                    <li class="nav-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt icon"></i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
            <!-- </div> -->
        </nav>
        <div class="collapse show" id="navbar-collapse">
            <div class="navbar navbar-expand-md d-flex align-items-center justify-content-between flex-wrap" id="navbar-sub">
                <a class="d-flex align-items-center" href="{{url('/home')}}">
                    <i class="fas fa-user icon"></i>
                    <strong>Perfil</strong>
                </a>
                <a class="d-flex align-items-center" href="{{url('/cifras')}}">
                    <i class="fas music-alt icon" style="width: 30px; margin-right: 0"><img src="nota.svg" style="width: inherit"></img></i>
                    <strong>Cifras</strong>
                </a>
                <a class="d-flex align-items-center" href="{{url('/playlists')}}">
                    <i class="fas fa-music icon"></i>
                    <strong>Playlists</strong>
                </a>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
<!-- onclick="event.preventDefault();
                                        console.log(document.getElementById('navbar-sub').style.display);
                                        if(document.getElementById('navbar-sub').style.display === 'none') {
                                            document.getElementById('navbar-sub').style.display = 'inline';
                                        } else {
                                            document.getElementById('navbar-sub').style.display = 'none';
                                        }" -->
