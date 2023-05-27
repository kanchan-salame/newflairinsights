<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <!-- Favicons -->
    <link href="{{ route('home') }}/assets/img/favicon.ico" rel="icon">
    <link href="{{ route('home') }}/assets/img/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ route('home') }}/plugins/fontawesome-free/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ route('home') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ route('home') }}/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ route('home') }}/assets/css/home.css" />
    <link rel="stylesheet" href="{{ route('home') }}/assets/css/bootstrap-video-carousel.min.css" />


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="{{ route('home') }}" class="logo me-auto"><img
                    src="{{ route('home') }}/assets/img/flairInsightslogo.jpg" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Report Categories</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <div class="dropdown-width">
                            <ul class="row">
                                {{-- @foreach ($categories as $category)
                                <li class="col-md-4 mt-2 mb-2 d-flex">
                                    <a href="{{ route('reports', $category->slug) }}"><i
                                            class="fas {{ $category->category_icon }} cat-icon"></i>
                                        {{ $category->name }}</a>
                                </li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </li>
                    <li><a class="nav-link" href="{{ route('latestReport') }}">Latest Report</a></li>
                    <li><a class="nav-link" href="{{ route('caseStudy') }}">Case Study</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="nav-link" href="{{ route('aboutUs') }}">About</a></li>
                    <li><a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a></li>
                    <!-- <li><a class="getstarted" href="login">Client Login</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <style>
    .dropdown ul li img {
        padding: 10px 20px;
    }

    .cat-icon {
        font-size: 35px !important;
        margin: 10px;
    }

    .dropdown-width {
        width: 950px;
        padding: 30px;
    }

    @media (max-width: 768px) {
        .dropdown-width {
            width: 92% !important;
        }

        .navbar .dropdown:hover>div {
            left: 15px !important;
        }

        .navbar .dropdown:hover>div {
            left: 0px;
        }
    }
    </style>
