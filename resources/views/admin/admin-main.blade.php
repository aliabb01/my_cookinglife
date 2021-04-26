<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Alertify Styles -->
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <!-- Alertify notification JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .ajs-message {
            font-size: 0.9rem;
            text-shadow: none !important;
            border: none !important;
            border-radius: 30px !important;
        }

        .ajs-success {
            background-color: rgb(21, 168, 21) !important;
        }

        .nav .active {
            font-weight: bold;
            border-left: 10px solid rgb(0, 153, 255);
        }

        .privilegeBadge {}

        .privilegeBadge:hover {
            background-color: #007BFF;
        }

        .sidebarLink {
            border-radius: 4px;
        }

        .active .sidebarSVG {
            color: #0099ff;
        }
    </style>

</head>

<body onload="startTime()">

    <nav class="navbar navbar-dark bg-dark flex-md-nowrap">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">MyCookingLife</a>
        <small class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Admin Panel</small>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/">İstifadəçi görünüşü</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar"
                style="border-bottom-right-radius: 30px;">

                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column mb-5">
                        <li class="nav-item mt-3">
                            <a class="d-flex align-items-end nav-link bg-light text-dark sidebarLink {{ Request::is('admin') ? 'active' : '' }}"
                                href="/admin" style="">

                                <div class="">
                                    <svg class="sidebarSVG" width="24px" height="24px"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                                <div class="mx-auto">
                                    Dashboard
                                </div>
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a class="d-flex align-items-end nav-link bg-light text-dark sidebarLink {{ Request::is('subscribers') ? 'active' : '' }}"
                                href="/subscribers" style="">
                                <div class="mr-1">
                                    <svg class="sidebarSVG" width="24px" height="24px"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="mx-auto">
                                    Subscribers
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="d-flex align-items-end nav-link bg-light text-dark sidebarLink {{ Request::is('profile/@'. auth()->user()->name) ? 'active' : '' }}"
                                href="{{ route('admin.profile', auth()->user()->name) }}" style="">

                                <div class="mr-1">
                                    <svg class="sidebarSVG" width="24px" height="24px"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="mx-auto">
                                    Admin profile
                                </div>
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a class="d-flex align-items-end nav-link bg-light text-dark sidebarLink {{ Request::is('campaign') ? 'active' : '' }}"
                                href="/campaign" style="">

                                <div class="mr-1">
                                    <svg class="sidebarSVG" width="24px" height="24px"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </div>

                                <div class="mx-auto">
                                    Start a campaign
                                </div>
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a class="d-flex align-items-end nav-link bg-light text-dark sidebarLink {{ Request::is('operations') ? 'active' : '' }}"
                                href="{{ route('admin.operations') }}" style="">

                                <div class="mr-1">
                                    <svg class="sidebarSVG" width="24px" height="24px"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>

                                <div class="mx-auto">
                                    Operations
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--col-md-9 ml-sm-auto col-lg-10 px-md-4-->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 vh-100 mb-5" style="">

                <div class="container d-flex justify-content-around">
                    <div id="dynamicTime"></div>
                </div>

                <div class="d-flex justify-content-around">
                    <div>
                        <span>Signed in as:</span>
                        <h4>{{ auth()->user()->name }}</h4>
                    </div>

                    <div class="text-center">
                        <span>Admin Privileges:</span>
                        <h4>
                            @include(auth()->user()->returnPrivilege())
                        </h4>
                    </div>
                </div>

                @yield('admin-content')

            </main>
        </div>
    </div>
</body>

<!-- position: absolute; bottom:0px; width:100%; -->
<footer class="mt-5 pt-5">
</footer>

@if (Session('unsubscribed-by-admin'))
<script>
    alertify.notify("{!! \Session::get('unsubscribed-by-admin') !!}", "success", 10);
</script>
@endif

@if (Session('deletedAll'))
<script>
    alertify.notify("{!! \Session::get('deletedAll') !!}", "success", 10);
</script>
@endif

<script src="https://unpkg.com/turbolink"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    function startTime() {
      var today = new Date();      
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('dynamicTime').innerHTML = 
      h + " : " + m + " : " + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
</script>

</html>