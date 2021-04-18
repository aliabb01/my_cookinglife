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

    <!-- Google (Search console) site verification-->
    <meta name="google-site-verification" content="z0DRLygPLhIVapi2gjZW2bf0-8FPTq0vZYELVXF6zQ0" />

    <meta name="theme-color" content="#30a5ff">

    <title>MyCookingLife</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/css?family=Nunito">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/welcome.css" rel="stylesheet">

    <!-- Alertify Styles -->
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EB0QDTG7KE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-EB0QDTG7KE');
    </script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-color shadow-sm navigationBar">
            <div class="container">
                <a class="brandName" href="/">
                    MyCookingLife
                </a>
                <button class="navbar-toggler collapsed bg-dark" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-3">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/" class="nav-link">Ana
                                Səhifə</a> </li>
                        <li class="{{ Request::is('haqqimizda') ? 'active' : '' }}"><a href="/haqqimizda"
                                class="nav-link">Haqqımızda</a></li>
                        {{-- <li class="dropdown bottom-line">
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
                        </li> --}}
                        <li class="nav-item {{ Request::is('elaqe') ? 'active' : '' }}"><a href="/elaqe"
                                class="nav-link">Əlaqə</a></li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}"><a href="/admin"
                                class="nav-link">Admin panel</a></li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        @endauth
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



        <div class="container">

            {{-- @if (Session::has('elaqe')) --}}
            <!-- If session is contact session then show an alert -->
            {{-- <div id="emailAlert">


                <div class="alert success-div shadow-lg" style="background-color:#B5EBCC;" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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

                    <span id="alertProgress"></span>

                </div>

            </div> --}}

            {{-- @endif --}}
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

    <!-- Tubolink -->
    <script src="https://unpkg.com/turbolink"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/d02e083562.js" crossorigin="anonymous"></script>

    <!-- Instagram embed images script -->
    <script async src="//www.instagram.com/embed.js"></script>

    <!-- Alertify notification JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <!-- Alertify notifications-->

    {{-- Check if the cookie is null.
         Therefore its first time visiting.
         If the country does not match the selected country then
         report back with alert message
          --}}

    @if (Cookie::get('mycookinglife_session')==null)
    @if ($locationData->countryName !== 'Azerbaijan')
    <script>
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        sleep(5000).then(() => {
            alertify.notify("Good day. As we noticed, you joined from {!! $locationData->countryName !!}. We do not offer services in {!! $locationData->countryName !!} yet.", "warning", 10) 
            sleep(10000).then(() => {
                alertify.notify("Sign Up to the newsletter to get notified when our services will be available in {!! $locationData->countryName !!}, {{ $locationData->cityName }}", "warning", 10)
            });
        });                        
    </script>
    @endif
    @endif

    {{-- Contact page form submission successful session --}}
    @if (Session::has('elaqe'))
    <script>
        alertify.notify("{!! \Session::get('elaqe') !!}", "success", 10);        
    </script>
    @endif

    {{-- Subscribtion to mailing list --}}
    @if (Session('subscribed'))
    <script>
        alertify.notify("{!! \Session::get('subscribed') !!}", "success", 10);
    </script>
    @endif

    {{-- Subscription duplicate --}}
    @if (Session('subscribeDuplicate'))
    <script>
        alertify.notify("{!! \Session::get('subscribeDuplicate') !!}", "error", 10);
    </script>
    @endif

    {{-- Unsubscription successfull --}}
    @if (Session('unsubscribed'))
    <script>
        alertify.notify("{!! \Session::get('unsubscribed') !!}", "info", 10);
    </script>
    @endif

    @if (Session('admin-profile-deleted'))
    <script>
        alertify.notify("{!! \Session::get('admin-profile-deleted') !!}", "success", 10);    
    </script>    
    @endif

    @if (Session('all-admins-deleted'))
        <script>
            alertify.notify("{!! \Session::get('all-admins-deleted') !!}", "success", 10);
        </script>
    @endif

    <!-- Callbell script -->
    <!-- Start of Async Callbell Code -->
    <script>
        window.callbellSettings = {
      token: "D5EYDwrapvoxKNjirGit5cQk"
    };
    </script>
    <script>
        (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
    </script>
    <!-- End of Async Callbell Code -->

</body>

</html>