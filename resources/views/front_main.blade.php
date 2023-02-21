<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ET-Verify</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link rel="icon" href="{{ asset('logo/JUlogo.png"') }}">

    <!-- Google Fonts -->
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <!-- Template Main CSS File -->
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            {{-- <div  class='btn btn-default btn-xs m-3'> --}}
            {{-- E:\G Drive\etverify\public\frontend\assets\img\ETH -Ver final.png --}}
            <img src="frontend/assets/img/ETH -Ver final.png" class="card-img-top img-fluid me-lg-1"
                style="float:right;width:65px;height:70px;">
            {{-- </div> --}}
            {{-- <a href="index.html" class="logo me-auto me-lg-3"><img src="frontend/assets/img/JUlogo.png" alt="" class="rounded float-start"></a> --}}

            <h1 class="logo me-auto"><a href="">
                    <span style="size:20 ">Et-Verify</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="">Home</a></li>

                    <li class="dropdown"><a href="#"><span>Request</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="">Document Check</a></li>
                            <li><a href="">Track Status</a></li>

                    </li>


                </ul>
                </li>
                <li><a href="">Services</a></li>
                <li><a href="">About</a></li>

                @if (Auth::check())
                    <li><a href="" class="active">My Dashboard</a></li>

                    <li><a href="{{ url('login') }}" class="btn btn-light btn-sm m-1 text-center">Log out</a></li>

                    <li><a href=""></a></li>
                @else
                    <li><a href=""></a></li>
                    <li> <a href="" class="btn btn-light btn-sm m-1 text-center">Log in
                            &nbsp;&nbsp;&nbsp;</a></li>
                    <li> <a href="" class="btn btn-light btn-sm m-1 text-center">SIGN
                            UP&nbsp;&nbsp;&nbsp;</a></li>
                @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex">
                {{-- <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a> --}}
            </div>

        </div>
    </header><!-- End Header -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    @yield('content')

</body>
@yield('js')

</html>
