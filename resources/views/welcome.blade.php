<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Elvis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0" style="background-color: #433C3C;">
        <nav class="navbar" data-spy="affix">
            <div class="container">
                <div class="fixed top-0 left-0 px-6 py-4 sm:block">
                    <a href="{{ url('/') }}">
                        <img src="logo.png" alt="Elvis" style="width: 150px;">
                    </a>
                </div>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-gray-700 text-smunderline">Register</a>
                    @endif
                    @endif
                </div>
                @endif
            </div>
        </nav>

        <div class="container">
            <div id="myCarousel" class="carousel slide self-align-items" role="dialog" data-ride="carousel" data-pause="hover" data-keyboard="true">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ex1.jpg" class="d-block w-100" alt="..." style="width: 1450px; height: 525px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ex2.jpg" class="d-block w-100" alt="..." style="width: 1450px; height: 525px;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ex3.jpg" class="d-block w-100" alt="..." style="width: 1450px; height: 525px;">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>
        </div>
    </div>
</body>

</html>
