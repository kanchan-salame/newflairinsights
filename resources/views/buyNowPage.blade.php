@extends('layouts.applayout')
@section('content')

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .tab-content>.active {
            display: block;
            border-left: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
            border-bottom: 1px solid #dee2e6;
        }

        .container .tab-pane .active {}

        .report-img {
            max-width: 100%;
            height: 200px;
            box-shadow: 5px 6px rgb(0 0 0 / 10%);
        }

        #hero {
            height: 400px;
            padding-top: 20px !important;
        }

        .breadcrumbs {
            padding: 30px 0;
            min-height: 40px;
            background: transparent;
            margin-top: 0px;
        }

        .breadcrumbs ol li a,
        .breadcrumbs ol li {
            color: #fff;
            font-size: 18px;
            font-weight: 600;
        }

        .breadcrumbs ol li+li::before {
            display: inline-block;
            padding-right: 10px;
            color: #fff;
            content: "/";
        }

        .icon-style {
            font-size: 40px;
            padding: 10px;
            color: #0869B1;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 700;
            line-height: 25px;
            color: #fff;
        }

        .report-inline {
            color: #fff;
        }

        #home h3 {
            font-size: 20px;
            color: #0869B1;
        }

        thead {
            background: #0869B1;
            color: #fff;
        }

        .price-item {
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            background-color: #fff;
            -webkit-box-shadow: 0 10px 40px #c6c6c66e;
            -moz-box-shadow: 0 10px 40px #c6c6c66e;
            box-shadow: 0 10px 40px #c6c6c66e;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            margin-bottom: 30px;
            padding-bottom: 30px;
        }

        .vmr-color {
            color: #1d1756 !important;
        }

        .price-head {
            background-color: #fff;
            padding-top: 40px;
            padding-bottom: 60px;
            position: relative;
            color: #fff;
            overflow: hidden;
            text-align: center;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .price-head .price__title {
            font-size: 28px;
            font-weight: 600;
            color: #fff;
        }

        .price-btn-box {
            margin-top: -23px;
        }

        .price-list {
            width: 85%;
            margin-left: auto;
            margin-right: auto;
            list-style: none;
        }

        .vmr-bg {
            background: #1d1756 !important;
        }

        .theme-btn {
            font-weight: 500;
            font-size: 14px;
            color: #333f57;
            line-height: 32px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #F5F7FC;
            text-align: center;
            position: relative;
            display: inline-block;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            z-index: 1;
        }

        .list-items li {
            margin-bottom: 7px;
            font-weight: 500;
            color: #333;
            font-size: 16px;
        }
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="align-items-center">


        <div class="container">
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="">

                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>{{ $report->category->name }}</li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->
            <div class="row">
                <div class="col-lg-2 order-1 order-lg-1 hero-img">
                    <img src="{{ $report->category->image ? route('home') . '/storage/' . $report->category->image : route('home') . '/assets/img/team/team-3.jpg' }}"
                        class="img-fluid report-img" alt="">
                </div>
                <div class="col-lg-10 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{!! Str::limit($report->title, 200) !!}</h1>
                    <p class="report-inline">
                        <strong>Report Id: </strong>{{ $report->id }} |
                        <strong>Published Date:
                        </strong>{{ \Carbon\Carbon::parse($report->created_at)->isoFormat('MMM YYYY') }} |
                        <strong>No. of Pages: </strong>{{ $report->pages }} |
                        <strong>Base Year for Estimate:
                        </strong>{{ \Carbon\Carbon::parse($report->created_at)->isoFormat('MMM YYYY') }} |
                        <strong>Format: </strong> <i class="fas fa-file-pdf"></i>
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="tel:+1 830 455 7727" class="btn-get-started scrollto">
                            <i class="fas fa-phone"></i> Request Expert Call?
                        </a>
                        <a href="{{ route('askForDiscount', $report->slug) }}" class="btn-get-started scrollto mr-2 ml-2">
                            <i class="fas fa-eye"></i> Ask for Discount
                        </a>
                        <a href="{{ route('rquestSample', $report->slug) }}" class="btn-get-started scrollto">
                            <i class="fas fa-download"></i> Download Free Sample Report
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="price-item">
                                    <div class="price-head vmr-color">
                                        <center><i class="la la-user vmr-color" style="font-size:56px"></i></center>
                                        <h3 class="price__title text-uppercase vmr-color">Single User</h3>
                                        <h3 class="price__text">$3,950.00</h3>
                                    </div><!-- end price-head -->

                                    <div class="price-btn-box text-center">
                                            <a href="{{ route('checkout', [ 'slug' => $report->slug, 'user_type' => 'single', 'reportSlug' => $report->slug]) }}">
                                            <button class="theme-btn vmr-bg text-white">Buy Now<i
                                                    class="la la-arrow-right ml-2"></i></button>
                                            </a>
                                        </div>
                                    <ul class="list-items price-list mt-4">
                                        <li><i class="la la-check text-success mr-2"></i>1 User Access. (max. 2 IP
                                            addresses)</li>
                                        <li><i class="la la-check text-success mr-2"></i>View qualitative PDF report(s)
                                            online.</li>
                                        <li><i class="la la-check text-success mr-2"></i>Upto 25% free report customization.
                                        </li>
                                        <li><i class="la la-check text-success mr-2"></i>30 days free analyst support.</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="price-item">
                                    <div class="price-head vmr-color">
                                        <center><i class="la la-user vmr-color" style="font-size:56px"></i></center>
                                        <h3 class="price__title text-uppercase vmr-color">Multiple User</h3>
                                        <h3 class="price__text">$3,950.00</h3>
                                    </div><!-- end price-head -->


                                    <div class="price-btn-box text-center">
                                            <a href="{{ route('checkout', [ 'slug' => $report->slug, 'user_type' => 'multiple', 'reportSlug' => $report->slug]) }}"><button class="theme-btn vmr-bg text-white">Buy Now<i
                                                    class="la la-arrow-right ml-2"></i></button></a>
                                        </div>


                                    <ul class="list-items price-list mt-4">
                                        <li><i class="la la-check text-success mr-2"></i>1 User Access. (max. 2 IP
                                            addresses)</li>
                                        <li><i class="la la-check text-success mr-2"></i>View qualitative PDF report(s)
                                            online.</li>
                                        <li><i class="la la-check text-success mr-2"></i>Upto 25% free report customization.
                                        </li>
                                        <li><i class="la la-check text-success mr-2"></i>30 days free analyst support.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar">
                                    <div class="options">
                                        <h6>Pricing & Purchase Option</h6>
                                        <a href="{{route('checkout', [ 'slug' => $report->slug, 'user_type' => '', 'reportSlug' => $report->slug])}}">
                                        <button class="btn btn-success">Proceed to buy</button>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <div class="speak-to-analyst d-flex">
                                    <img src="{{ route('home') }}/assets/img/hero-img.png" class="" alt="">
                                    <p>Speak to analyst and have exclusive insights tailored for your needs</p>
                                </div>
                                <br>
                                <div class="request-additional text-center">
                                    <h6>Request addional customization in this report</h6>
                                    <a href="#">Click here</a>
                                </div>
                                <br>
                                <div class="why-us text-left">
                                    <div class="options"
                                        style="
                                    text-align: left;
                                ">
                                        <h6>Why Choose Us</h6>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="icon-style">
                                                    <i class="fas fa-wallet"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-9">
                                                <h5>Insured Buying </h5>
                                                <p>This Report Has A Service
                                                    Guarantee. We Stand By Our
                                                    Report Quality.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="icon-style">
                                                    <i class="fas fa-fan"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-9">
                                                <h5>Confidentiality </h5>
                                                <p>This Report Has A Service
                                                    Guarantee. We Stand By Our
                                                    Report Quality.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="icon-style">
                                                    <i class="fab fa-searchengin"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-9">
                                                <h5>Custom Research Service </h5>
                                                <p>We Are In Compliance With
                                                    GDPR & CCPA Norms. All
                                                    Interactions Are Confidential.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <span class="icon-style">
                                                    <i class="fas fa-phone-alt"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-9">
                                                <h5>24/5 Research Support </h5>
                                                <p>Get Your Queries Resolved From An Industry Expert.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
