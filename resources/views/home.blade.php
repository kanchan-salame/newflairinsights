@extends('layouts.applayout')
@section('content')
    <link rel="stylesheet" href="{{ route('home') }}/assets/css/bootstrap-video-carousel.min.css" />
    <style>
        /* Testimonial CSS */
        .section-title {
            font-size: 28px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            font-weight: 400;
            display: inline-block;
            position: relative;
        }

        .section-title:after,
        .section-title:before {
            content: "";
            position: absolute;
            bottom: 0;
        }

        .section-title:after {
            height: 2px;
            background-color: rgba(252, 92, 15, 0.46);
            left: 25%;
            right: 25%;
        }

        .section-title:before {
            width: 15px;
            height: 15px;
            border: 3px solid #fff;
            background-color: #fc5c0f;
            left: 50%;
            transform: translatex(-50%);
            bottom: -6px;
            z-index: 9;
            border-radius: 50%;
        }

        /* CAROUSEL STARTS */
        .customer-feedback .owl-item img {
            width: 85px !important;
            height: 85px;
            margin: 0 auto;
            border-radius: 40px;
        }

        .feedback-slider-item {
            position: relative;
            padding: 60px;
            margin-top: -40px;
        }

        .customer-name {
            margin-top: 15px;
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: 500;
        }

        .feedback-slider-item p {
            line-height: 1.875;
        }

        .customer-rating {
            background-color: #eee;
            border: 3px solid #fff;
            color: rgba(1, 1, 1, 0.702);
            font-weight: 700;
            border-radius: 50%;
            position: absolute;
            width: 47px;
            height: 47px;
            line-height: 44px;
            font-size: 15px;
            right: 0;
            top: 77px;
            text-indent: -3px;
        }

        .thumb-prev .customer-rating {
            top: -20px;
            left: 0;
            right: auto;
        }

        .thumb-next .customer-rating {
            top: -20px;
            right: 0;
        }

        .customer-rating i {
            color: rgb(251, 90, 13);
            position: absolute;
            top: 10px;
            right: 5px;
            font-weight: 600;
            font-size: 12px;
        }

        /* GREY BACKGROUND COLOR OF THE ACTIVE SLIDER */
        .feedback-slider-item:after {
            content: "";
            position: absolute;
            left: 20px;
            right: 20px;
            bottom: 0;
            top: 103px;
            background-color: #f6f6f6;
            border: 1px solid rgba(251, 90, 13, 0.1);
            border-radius: 10px;
            z-index: -1;
        }

        .thumb-prev,
        .thumb-next {
            position: absolute;
            z-index: 99;
            top: 45%;
            width: 98px;
            height: 98px;
            left: -90px;
            cursor: pointer;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .thumb-next {
            left: auto;
            right: -90px;
        }

        .feedback-slider-thumb img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
        }

        .feedback-slider-thumb:hover {
            opacity: 0.8;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        }

        .customer-feedback .owl-nav [class*="owl-"] {
            position: relative;
            display: inline-block;
            bottom: 45px;
            transition: all 0.2s ease-in;
        }

        .customer-feedback .owl-nav i {
            background-color: transparent;
            color: rgb(251, 90, 13);
            font-size: 25px;
        }

        .customer-feedback .owl-prev {
            left: -15px;
        }

        .customer-feedback .owl-prev:hover {
            left: -20px;
        }

        .customer-feedback .owl-next {
            right: -15px;
        }

        .customer-feedback .owl-next:hover {
            right: -20px;
        }

        /* DOTS */
        .customer-feedback .owl-dots {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .customer-feedback .owl-dot {
            display: inline-block;
        }

        .customer-feedback .owl-dots .owl-dot span {
            width: 11px;
            height: 11px;
            margin: 0 5px;
            background: #fff;
            border: 1px solid rgb(251, 90, 13);
            display: block;
            -webkit-backface-visibility: visible;
            -webkit-transition: all 200ms ease;
            transition: all 200ms ease;
            border-radius: 50%;
        }

        .customer-feedback .owl-dots .owl-dot.active span {
            background-color: rgb(251, 90, 13);
        }
    </style>


    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }

        }

        @media (max-width: 768px) {
            .align-items-center {
                align-items: center !important;
                width: 80%;
                margin: 0 auto;
            }

            .mobile-text h1 {
                font-size: 18px;
                font-weight: bold;
            }

            .mobile-text h5 {
                font-size: 14px;
            }

            .back-to-top {
                width: 50px;
            }

            .rowcss {
                margin-top: 0px !important;
            }

            .section_title,
            .colcss {
                margin-top: 0px !important;
                padding-top: 0px !important;
            }
        }
    </style>

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
            {{-- <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li> --}}
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                    <source class="h-100" src="{{ route('home') }}/assets/video/avc_My Video13.mp4" type="video/mp4" />
                </video>
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center mobile-text" style="opacity: 0.7;">
                            <h1 class="mb-3">WE ARE A NEW AGE GROWTH</h1>
                            <h1 class="mb-3">CONSULTING COMPANY</h1>
                            <hr>
                            <h5 class="mb-4">
                                We deep dive - track pulse of the market - and share value to our clients through
                                <br> hyperintelligence solutions and take them ahead on growth curve
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <main id="main">

        <style>
            .section-heading,
            .section-heading h2 {
                font-size: 30px;
                font-weight: 700;
                color: #000;
                display: inline-block;
                position: relative;
                text-align: center;
            }

            .we-are-market, .the-goal-is, .to-assist-clients, .discover-flair, .strategic-growth {
                background-image: linear-gradient(45deg, #f5f5f5 0%, #69cff6 100%);
                border-radius: 20px;
                padding: 10px;
                overflow: hidden;

            }
            .we-are-market .container,.to-assist-clients .container,.strategic-growth .container {

                background-image: url("{{ route('home') . '/assets/img/Path 401.png' }}");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: left;
                background-size: 20% 100%;
            }

            .the-goal-is .container, .discover-flair .container{

                background-image: url("{{ route('home') . '/assets/img/Path 402.png' }}");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: right;
                background-size: 20% 100%;
            }

            .we-are-market p, .the-goal-is p, .discover-flair p, .strategic-growth p {
                font-size: 24px;
                text-align: justify;
                color: #000;
                font-weight: 500;
            }
            .to-assist-clients p {
                font-size: 20px;
                text-align: justify;
                color: #000;
                font-weight: 500;
            }
            .we-are-market img, .the-goal-is img, .to-assist-clients img {
                width: 100%;
                border-radius: 20px;
            }
            ul {
                list-style: none;
            }
        </style>
        <section class="we-are-market">
            <div class="container" data-aos="fade-up">
                <div class="row content">

                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>WE ARE A MARKET RESEARCH EXPERT</h2>
                        </div>
                        <p class="text-justify">
                            With our years of expertise in market research we help businesses to identify, acquire, engage,
                            and understand reliable market insights. Our actionable research insights allows companies to
                            uncover new age business complexities and gain competitive advantage. Therefore, through our
                            research and consulting expertise we assist wide range of companies in their growth journey.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ route('home') . '/assets/img/img1.png' }}" alt="" class="mb-2 mt-2">
                    </div>
                </div>
            </div>
        </section>
        <section class="the-goal-is">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    <div class="col-lg-6">
                        <img src="{{ route('home') . '/assets/img/img2.png' }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="section-heading pt-4">
                            <h2>THE GOAL IS TO HELP COMPANIES & CREATE THEIR SUSTAINABLE GROWTH STORIES</h2>
                        </div>
                        <br><br><br>
                        <p class="text-justify">
                            With our years of expertise in market research we help businesses to identify, acquire, engage,
                            and understand reliable market insights. Our actionable research insights allows companies to
                            uncover new age business complexities and gain competitive advantage.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <section class="to-assist-clients">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    <div class="col-lg-6">
                        <div class="section-heading pt-4">
                            <h2>TO ASSIST OUR CLIENTS ON STRATEGIC INTELLIGENCE IS AT THE CORE OF WHAT WE DO</h2>
                        </div>
                        <p class="text-justify">
                            Our unconventional research approaches starts by seeing your world through the analytical lenses
                            of leading-edge commerce and innovation, with the sharpest view of technology and its impact on
                            businesses. We facilitate best-fit solutions to companies and keep them ahead on the technology
                            curve, propel their growth, identify new opportunities, markets and business models, answer
                            their unknowns; and create your Growth Story
                        </p>

                    </div>

                    <div class="col-lg-6">
                        <img src="{{ route('home') . '/assets/img/img3.png' }}" alt="" style="width: 100%;">
                    </div>
                    <div class="col-md-6">
                        <ul class="pt-4">
                            <li><i class="ri-check-double-line"></i> Competitive Intelligence</li>
                            <li><i class="ri-check-double-line"></i> Advisory Service</li>
                            <li><i class="ri-check-double-line"></i> Strategy Consulting</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="pt-4">
                            <li><i class="ri-check-double-line"></i> Industry/Market Intelligence Report</li>
                            <li><i class="ri-check-double-line"></i> Custom Research</li>
                            <li><i class="ri-check-double-line"></i> Consulting and Engagement Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="discover-flair">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    <div class="col-lg-12 text-center">
                        <div class="section-title pt-4">
                            <h2>Discover how Flair Insights can help your business</h2>
                        </div>
                        <br><br><br>
                        <p class="text-justify">
                            Growth is a journey, but sustainable growth is a long run journey, and we look to be your
                            catalyst along. Our business consulting, advisory, and intelligence expertise uncover growth
                            opportunities and methodically help companies to identify, plan and capture them. We offer range
                            intelligence services that includes
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="strategic-growth">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    <div class="col-lg-12 text-center">
                        <div class="section-title pt-4">
                            <h2>Strategic Growth Intelligence Model</h2>
                        </div>
                        <p class="text-justify">
                            We help our consumers to identify the areas of their business that are set for innovation and
                            help them in developing suitable GTM strategies. At each stage of business, we deep dive at
                            granular level and analyze the untapped areas where our client partners can gain suitable
                            revenue opportunities. Our intelligence further suggests whom to partner with right set of
                            technology tools and planning execution roadmap to achieve realistic as well as scalable
                            opportunities.
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <img src="{{ route('home') . '/assets/img/Presentationfgjn2.png' }}" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->
        <section style="position: relative;">
            <div class="customer-feedback">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row mt-5 rowcss">
                                <div class="col-sm-10 pt-5 colcss">
                                    <div class="section_title mt-5 pt-5">
                                        <h2 class="text-left sub-heading"> Testimonials</h2>
                                        <h1 class="primary-color"><strong>Our Customers Praise us for Our Great
                                                Results</strong></h1>
                                        <p>Have to be repudiated annoyances accepted the wis man therefore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div>
                                        <h2 class="section-title">What Clients Say</h2>
                                    </div>
                                </div><!-- /End col -->
                            </div>

                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-8" style="position: relative;">
                                    <div class="owl-carousel feedback-slider">

                                        <!-- slider item -->
                                        <div class="feedback-slider-item">
                                            <img src="{{ route('home') }}/assets/img/dummy-team.png"
                                                class="center-block img-circle" alt="Customer Feedback">
                                            <h3 class="customer-name">Director,</h3>
                                            <em>FMCG Company</em>
                                            <p>They are committed toward delivering intensive reports with the facility of
                                                innovatively designed
                                                and developed data processing and analysis division. Thanks Flair Insights.
                                            </p>
                                            <span class="light-bg customer-rating" data-rating="5">
                                                5
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- /slider item -->

                                        <!-- slider item -->
                                        <div class="feedback-slider-item">
                                            <img src="{{ route('home') }}/assets/img/dummy-team.png"
                                                class="center-block img-circle" alt="Customer Feedback">
                                            <h3 class="customer-name">Vice President,</h3>
                                            <em>Corporate Planning</em>
                                            <p>We had a great experience working with Flair Insights over the past few
                                                months.
                                                They truly understand our requirement and provide excellent quality of
                                                report and customer service.</p>
                                            <span class="light-bg customer-rating" data-rating="4">
                                                4
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- /slider item -->

                                        <!-- slider item -->
                                        <div class="feedback-slider-item">
                                            <img src="{{ route('home') }}/assets/img/dummy-team.png"
                                                class="center-block img-circle" alt="Customer Feedback">
                                            <h3 class="customer-name">Director,</h3>
                                            <em>Sales &amp; Marketing</em>
                                            <p>We are happy and satisfied with the purchase of a quality report.
                                                They have proved their worth by delivering valuable, usable insights as and
                                                when we needed. Good work. Keep it up.</p>
                                            <span class="light-bg customer-rating" data-rating="5">
                                                5
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- /slider item -->

                                    </div><!-- /End feedback-slider -->

                                    <!-- side thumbnail -->
                                    <div class="feedback-slider-thumb hidden-xs">
                                        <div class="thumb-prev">
                                            <span>
                                                <img src="{{ route('home') }}/assets/img/dummy-team.png"
                                                    alt="Customer Feedback">
                                            </span>
                                            <span class="light-bg customer-rating">
                                                5
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>

                                        <div class="thumb-next">
                                            <span>
                                                <img src="{{ route('home') }}/assets/img/dummy-team.png"
                                                    alt="Customer Feedback">
                                            </span>
                                            <span class="light-bg customer-rating">
                                                4
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /side thumbnail -->

                                </div><!-- /End col -->
                            </div><!-- /End row -->
                        </div>

                    </div><!-- /End row -->

                </div><!-- /End container -->
            </div><!-- /End customer-feedback -->
        </section>
    </main><!-- End #main -->

    <script type="text/javascript" src="{{ route('home') }}/assets/js/mdb.min.js"></script>
@endsection

@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var feedbackSlider = $(".feedback-slider");
            feedbackSlider.owlCarousel({
                items: 1,
                nav: true,
                dots: true,
                autoplay: true,
                loop: true,
                mouseDrag: true,
                touchDrag: true,
                navText: [
                    "<i class='fa fa-long-arrow-left'></i>",
                    "<i class='fa fa-long-arrow-right'></i>"
                ],
                responsive: {
                    // breakpoint from 767 up
                    767: {
                        nav: true,
                        dots: false
                    }
                }
            });

            feedbackSlider.on("translate.owl.carousel", function() {
                $(".feedback-slider-item h3")
                    .removeClass("animated fadeIn")
                    .css("opacity", "0");
                $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
                    .removeClass("animated zoomIn")
                    .css("opacity", "0");
            });

            feedbackSlider.on("translated.owl.carousel", function() {
                $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
                $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
                    .addClass("animated zoomIn")
                    .css("opacity", "1");
            });
            feedbackSlider.on("changed.owl.carousel", function(property) {
                var current = property.item.index;
                var prevThumb = $(property.target)
                    .find(".owl-item")
                    .eq(current)
                    .prev()
                    .find("img")
                    .attr("src");
                var nextThumb = $(property.target)
                    .find(".owl-item")
                    .eq(current)
                    .next()
                    .find("img")
                    .attr("src");
                var prevRating = $(property.target)
                    .find(".owl-item")
                    .eq(current)
                    .prev()
                    .find("span")
                    .attr("data-rating");
                var nextRating = $(property.target)
                    .find(".owl-item")
                    .eq(current)
                    .next()
                    .find("span")
                    .attr("data-rating");
                $(".thumb-prev").find("img").attr("src", prevThumb);
                $(".thumb-next").find("img").attr("src", nextThumb);
                $(".thumb-prev")
                    .find("span")
                    .next()
                    .html(prevRating + '<i class="fa fa-star"></i>');
                $(".thumb-next")
                    .find("span")
                    .next()
                    .html(nextRating + '<i class="fa fa-star"></i>');
            });
            $(".thumb-next").on("click", function() {
                feedbackSlider.trigger("next.owl.carousel", [300]);
                return false;
            });
            $(".thumb-prev").on("click", function() {
                feedbackSlider.trigger("prev.owl.carousel", [300]);
                return false;
            });
        }); //end ready
    </script>
@endsection
