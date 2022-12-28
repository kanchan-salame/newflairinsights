@extends('layouts.applayout')
@section('content')
    <style>
        .tab-content>.active {
            display: block;
            border-left: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
            border-bottom: 1px solid #dee2e6;
        }

        .container .tab-pane .active {}
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-2 order-1 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
                <div class="col-lg-10 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu1">Table of Content</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu2">Methodology</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <h3>HOME</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <h3>Menu 1</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat.</p>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar">
                                    <div class="options">
                                        <h6>Pricing & Purchase Option</h6>
                                        <button class="btn btn-success">Proceed to buy</button>
                                    </div>
                                </div>
                                <br>
                                <div class="speak-to-analyst d-flex">
                                    <img src="assets/img/hero-img.png" class="" alt="">
                                    <p>Speak to analyst and have exclusive insights tailored for your needs</p>
                                </div>
                                <br>
                                <div class="request-additional text-center">
                                    <h6>Request addional customization in this report</h6>
                                    <a href="#">Click here</a>
                                </div>
                                <br>
                                <div class="why-us">
                                    <div class="options">
                                        <h6>Why Choose Us</h6>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <i class="bx bxl-facebook"></i>
                                            </div>
                                            <div class="col-md-9">
                                                <h3>Lorem </h3>
                                                <p>Lorem sit amet consectetur adipisicing elit. Neque, alias.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <i class="bx bxl-facebook"></i>
                                            </div>
                                            <div class="col-md-9">
                                                <h3>Lorem </h3>
                                                <p>Lorem sit amet consectetur adipisicing elit. Neque, alias.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <i class="bx bxl-facebook"></i>
                                            </div>
                                            <div class="col-md-9">
                                                <h3>Lorem </h3>
                                                <p>Lorem sit amet consectetur adipisicing elit. Neque, alias.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <i class="bx bxl-facebook"></i>
                                            </div>
                                            <div class="col-md-9">
                                                <h3>Lorem </h3>
                                                <p>Lorem sit amet consectetur adipisicing elit. Neque, alias.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="side-contact-us">
                                    <div class="options">
                                        <h6>Contact Us</h6>
                                        <div class="row">
                                            <form action="" method="post">

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="pwd"
                                                            placeholder="Enter password" name="pwd">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Enter email" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
