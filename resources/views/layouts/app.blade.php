<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="MyCookingLife Şirniyyat veb səhifəsi">
    <meta name="keywords" content="Şirniyyat, Tort, Keks, Piroq, Cake, Sweets, Dessert, MyCookingLife">
    <meta name="author" content="Ali Abbasov">

    <title>MyCookingLife</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/css?family=Nunito">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/welcome.css" rel="stylesheet">



</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-color shadow-sm">
            <div class="container">
                <a class="brandName" href="/">
                    MyCookingLife
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-3">
                        <li class="nav-item"><a href="" class="nav-link">Ana Səhifə</a> </li>
                        <li class="nav-item"><a href="" class="nav-link">Haqqımızda</a></li>
                        <li class="nav-item dropdown bottom-line">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Şirniyyatlar
                            </a>

                            <div class="dropdown-menu bg-transparent border-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item mb-3 dropdown-item-rounded" href="#">
                                    Tortlar
                                </a>

                                <a class="dropdown-item mb-3 dropdown-item-rounded" href="#">
                                    Cupcake-lər
                                </a>

                                <a class="dropdown-item mb-3 dropdown-item-rounded" href="#">
                                    Kekslər
                                </a>

                                <a class="dropdown-item mb-3 dropdown-item-rounded" href="#">
                                    Digərləri
                                </a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Əlaqə</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        {{--@guest
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest--}}
                    </ul>

                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>


    <!-- Scripts -->
    <script src="js/app.js" defer></script>
    <script src="js/welcome.js" defer></script>
    <script src="https://kit.fontawesome.com/d02e083562.js" crossorigin="anonymous"></script>

    <!-- Photoswipe links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"
        integrity="sha512-2R4VJGamBudpzC1NTaSkusXP7QkiUYvEKhpJAxeVCqLDsgW4OqtzorZGpulE3eEA7p++U0ZYmqBwO3m+R2hRjA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.js"
        integrity="sha512-7jpTN4lfrURp41NL7vGXbMP+RPaf/1S5QlNMHLlkdBteN+X5znoT2P8ryCluqePOK79rpDWVPdq1+la4ijhIbQ=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.css"
        integrity="sha512-/lf2y2d7SFJau+G4TGgXCWJOAUxyDmJD+Tb35CdqoMZAQ8eNX0sgDKISlcxCtGpEAuyb1Q5vGPfB1XMettf0FA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.css"
        integrity="sha512-QwSfZXX2w9SDWSNBKpEos673LXajTJpYKwtG+zJNP9zHsgRrWtNSx1gKVyB6qWUP4wJ0Hfnk9KJzrB6IKrXmEQ=="
        crossorigin="anonymous" />
</body>

</html>