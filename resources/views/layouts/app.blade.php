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

    <meta name="theme-color" content="#350B40">

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
                        <li class="nav-item"><a href="/ev" class="nav-link">Ana Səhifə</a> </li>
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
                        <li class="nav-item"><a href="/elaqe" class="nav-link">Əlaqə</a></li>
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



        <div class="container mt-3">

            @if (Session::has('elaqe'))
            <div id="emailAlert">


                <div class="alert success-div" style="background-color:#B5EBCC; border-bottom:5px solid green;"
                    role="alert">
                    <div class="row">

                        <svg width="75" height="75" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <title>Layer 1</title>
                                <ellipse fill="#5fbf00" opacity="undefined" cx="389.50001" cy="272" id="svg_1"
                                    rx="190.00001" ry="193.5" stroke="#000" />
                                <rect fill="#ffffff" stroke-width="null" stroke-dasharray="null" stroke-opacity="null"
                                    opacity="undefined" x="427.99998" y="143.73707" width="24" height="263.52412"
                                    id="svg_6" transform="rotate(34 439.9999694824221,275.49914550781244) "
                                    stroke="#000" />
                                <rect fill="#ffffff" stroke="#000" stroke-width="null" stroke-dasharray="null"
                                    stroke-opacity="null" opacity="undefined" x="308.5" y="269.5" width="24"
                                    height="148" id="svg_3"
                                    transform="rotate(-42 320.5000000000002,343.50000000000006) " />
                                <ellipse stroke-width="0" ry="27.1134" rx="27.62886" id="svg_2" cy="37.5" cx="37.5"
                                    opacity="undefined" stroke="#000" fill="#5fbf00" />
                                <rect stroke="#000"
                                    transform="rotate(-44.57363510131836 26.4429931640625,47.84653854370117) "
                                    id="svg_7" height="17.83265" width="2.53879" y="38.93021" x="25.1736"
                                    opacity="undefined" stroke-opacity="null" stroke-dasharray="null" stroke-width="0"
                                    fill="#ffffff" />
                                <path stroke="#000" id="svg_8"
                                    d="m43.40039,20.65256l2.67983,0l0,38.99801l-2.74386,-0.12487l0.06403,-38.87314z"
                                    transform="rotate(44.773075103759766 44.7082939147949,40.15156555175783) "
                                    opacity="undefined" stroke-opacity="null" stroke-linecap="null"
                                    stroke-linejoin="null" stroke-dasharray="null" stroke-width="0" fill="#ffffff" />
                            </g>
                        </svg>

                        <div class="col">
                            <h4 class="" style="color:#00AB54;"><i> <b> Göndərildi </b> </i></h4>
                            <p class=""><strong>{!! \Session::get('elaqe') !!} </strong></p>
                        </div>
                    </div>

                </div>

            </div>

            @endif
        </div>

        <main class="">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>


    <!-- Scripts -->
    <script src="js/app.js" defer></script>
    <script src="js/progress.js" defer></script>
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