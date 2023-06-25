@extends('layouts.applayout')
@section('content')
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
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
            width: 100%;
            height: 450px;
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

        /*#hero h1 {*/
        /*    margin: 0 0 10px 0;*/
        /*    font-size: 18px;*/
        /*    font-weight: 700;*/
        /*    line-height: 25px;*/
        /*    color: #fff;*/
        /*}*/
        
        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 30px;
            font-weight: 700;
            line-height: 50px;
            color: #fff;
        }
        @media (max-width: 575px) {
    
   #hero h1 {
            margin: 0 0 10px 0;
            font-size: 20px;
            font-weight: 700;
            line-height: 25px;
            color: #fff;
        }
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
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="align-items-center">


        <div class="container">
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="">

                    <ol>
                        
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->
            <div class="row">
                <div class="col-lg-1 order-1 order-lg-1 hero-img">
                </div>
                <div class="col-lg-10 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="pt-3">{!! Str::limit($blog->title, 200) !!}</h1>
                    <p class="report-inline">
                        <!--<strong>Report Id: </strong>{{ $blog->id }} |-->
                        <!--<strong>Published Date:-->
                        <!--</strong>{{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM YYYY') }}-->
                    </p>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-2 pt-4 pe-2"></div>
                    <div class="col-md-8 pt-4 pe-2">
                        <img src="/assets/img/Soil Conditioners Market Global Outlook 22.jpg"
                            class="img-fluid report-img" alt="">
                        {!! $blog->long_description !!}

                    </div>
                    <div class="col-md-2 pt-4 pe-2"></div>

                    
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
