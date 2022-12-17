<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>This is Title</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="{{ route('home') }}" class="logo me-auto"><img src="assets/img/flairInsightslogo.jpg"
                    alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Report Categories</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Semiconductor & Electronics</a></li>
                            <li><a href="#">Automotive & Transportation</a></li>
                            <li><a href="#">Food and Beverages</a></li>
                            <li><a href="#">Energy</a></li>
                            <li><a href="#">Aerospace & Defense</a></li>
                            <li><a href="#">Manufacturing & Construction</a></li>
                            <li><a href="#">Chemicals & Materials</a></li>
                            <li><a href="#">ICT & Automation</a></li>
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Consumer Goods</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="{{ route('latestReport') }}">Latest Report</a></li>
                    <li><a class="nav-link" href="{{ route('caseStudy') }}">Case Study</a></li>
                    <li><a class="nav-link" href="{{ route('news') }}">News</a></li>
                    <li><a class="nav-link" href="{{ route('aboutUs') }}">About</a></li>
                    <li><a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a></li>
                    <li><a class="getstarted" href="#ClientLogin">Client Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
