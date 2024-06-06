<!DOCTYPE html>
<html lang="en">

<head>
    <title>ICD | PORTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('web/css/style.css') }}"> --}}

    <link rel="shortcut icon" href="{{asset('web/img/favicone.jpeg')}}">





</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner"
            style="background-color:   #001D23; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="/" style="color: #FFF">IFAKARA <b style="color: #FF6F0F">PORTAL</b></a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="/" class="nav-link" style="color:   #FF6F0F">Home</a></li>
                                <li><a href="/" class="nav-link" style="color: #FF6F0F">Vacancies</a></li>
                                <li><a href="{{route('viewjob')}}" class="nav-link" style="color: #FF6F0F">ICD
                                        Platforms</a></li>
                                <li><a href="/" class="nav-link" style="color:#FF6F0F">Feedback</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="/" class="nav-link"><span style="color: #FFF">Contact
                                            Us</span></a></li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3" style="color: #FF6F0F"></span></a>
                    </div>
                </div>
            </div>

        </header>