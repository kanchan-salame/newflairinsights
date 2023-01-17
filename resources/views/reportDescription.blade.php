@extends('layouts.applayout')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
        .report-img{
            max-width: 100%;
            height: 200px;
            box-shadow: 5px 6px rgb(0 0 0 / 10%);
        }
        #hero {
            height: 400px;
            padding-top: 20px !important;
        }
        .breadcrumbs {
            padding: 15px 0;
            min-height: 40px;
            background: transparent;
            margin-top: 0px;
        }
        .breadcrumbs ol li a{
            color: #000;
        }
        .icon-style {
            font-size: 40px;
            padding: 10px;
            color: #0869B1;
        }
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">


        <div class="container">
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="">

                  <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Inner Page</li>
                  </ol>

                </div>
              </section><!-- End Breadcrumbs -->
            <div class="row">
                <div class="col-lg-2 order-1 order-lg-1 hero-img">
                    <img src="{{ route('home') }}/assets/img/hero-img.png" class="img-fluid report-img" alt="">
                </div>
                <div class="col-lg-10 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{!! Str::limit($report->title, 50) !!}</h1>
                    <p>
                        <strong>Report Id: </strong>{{ $report->id }} |
                        <strong>Published Date: </strong>{{ $report->created_at }} |
                        <strong>No. of Pages: </strong>{{ $report->pages }} |
                        <strong>Base Year for Estimate: </strong>{{ $report->created_at }} |
                        <strong>Format: </strong>{{ $report->created_at }} |
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">
                            <i class="fas fa-download"></i> Download PDF Sample
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
                                {!! $report->description_one !!}
                                <img src="{{ route('home') . '/storage/' . $report->image_one }}" alt="" style="width: 100%;height: 300px;">
                                {!! $report->image_one !!}
                                {!! $report->description_one !!}
                                <img src="{{ route('home') . '/storage/' . $report->image_two }}" alt="" style="width: 100%;height: 300px;">
                                {!! $report->image_two !!}
                                {!! $report->description_one !!}
                                <img src="{{ route('home') . '/storage/' . $report->image_three }}" alt="" style="width: 100%;height: 300px;">
                                {!! $report->image_three !!}
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                {!! $report->description_one !!}
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                {!! $report->description_one !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
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
                                    <div class="options" style="
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
                                <div class="side-contact-us">
                                    <div class="options">
                                        <h6>Contact Us</h6>
                                        <div class="row">
                                            <form action="" method="post">

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="fname"
                                                            placeholder="Full Name" name="fname">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Business Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <select class="form-control" id="country" name="country">
                                                            <option value="1">Country 1</option>
                                                            <option value="2">Country 2</option>
                                                            <option value="3">Country 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="contact_no"
                                                            placeholder="Contact Number" name="contact_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="job_title"
                                                            placeholder="Job Title" name="job_title">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="company_name"
                                                            placeholder="Company Name" name="company_name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary form-control">Submit</button>
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
