<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



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
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="border-bottom-right-radius: 30px;">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column text-center">
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
                    </ul>



                </div>
            </nav>

            <!--col-md-9 ml-sm-auto col-lg-10 px-md-4-->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 vh-100 mb-5" style="">

                <div class="container d-flex justify-content-around">
                    Admin Panel
                    <div id="dynamicTime"></div>
                </div>
                @yield('admin-content')


            </main>


        </div>


    </div>

</body>

<!-- position: absolute; bottom:0px; width:100%; -->
<footer style="border-top: 1px solid black;" class="mt-5">


    
</footer>



<script src="https://unpkg.com/turbolink"></script>

<script>
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