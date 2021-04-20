<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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

        .active {
            font-weight: bold;
        }

        .privilegeBadge {}

        .privilegeBadge:hover {
            background-color: #007BFF;
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
                    <ul class="nav flex-column text-center mb-5">
                        <li class="nav-item mt-3">
                            <a class="nav-link bg-light text-dark {{ Request::is('admin') ? 'active' : '' }}"
                                href="/admin" style="border-radius: 30px;">
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a class="nav-link bg-light text-dark {{ Request::is('subscribers') ? 'active' : '' }}"
                                href="/subscribers" style="border-radius: 30px;">
                                Subscribers
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a class="nav-link bg-light text-dark {{ Request::is('campaign') ? 'active' : '' }}"
                                href="/campaign" style="border-radius: 30px;">
                                Start a campaign
                            </a>
                        </li>

                        <li class="nav-item mt-3">
                            <a class="nav-link bg-light text-dark {{ Request::has('profile') ? 'active' : '' }}"
                                href="{{ route('admin.profile', auth()->user()->name) }}" style="border-radius: 30px;">
                                Admin profile
                            </a>
                        </li>
                        

                        <li class="nav-item mt-3">
                            <a class="nav-link bg-light text-dark {{ Request::is('operations') ? 'active' : '' }}"
                                href="/operations" style="border-radius: 30px;">
                                Operations
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

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