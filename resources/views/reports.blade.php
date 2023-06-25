@extends('layouts.applayout')
@section('content')
    <style>
        .member-info h3 strong {
            font-weight: normal;
            font-size: 15px;
        }

        .img-fluid {
            max-width: 100%;
            /*height: 210px;*/
        }

        #hero {
            height: 400px !important;
        }

        .hero-img img {
            float: right;
        }

        .descriptionText {
            /*width: 1000px;*/
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.2);
            position: relative;
            padding: 10px 40px;
            box-shadow: 5px 10px rgba(0, 0, 0, 0.2);
            top: -50px;
            background-color: #fff;
            border-radius: 20px;
            text-align: justify;
        }

        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
            display: block;
            width: 200px;
            text-align: center;
            padding: 10px;
            background: #73c5eb;
            margin: 10px 0px;
            border-radius: 20px;
            color: #fff;
        }
        
        @media (max-width: 360px) {
   
    .hero-img img {
        float: none !important;
        margin-left: 18px;
    }
    
}
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{{ $categoyData->name }}</h1>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img hero-img1" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ $categoyData->image ? route('home') . '/storage/' . $categoyData->image : route('home') . '/assets/img/team/team-3.jpg' }}"
                        class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <div class="container descriptionText more mt-5 mt-lg-0">
        {{ $categoyData->description }}
    </div>
    <main id="main">
        {{-- {{ dd($reports) }} --}}
        <section id="team" class="team section-bg mt-5">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- <div class="text-center">
                                    <h4>Categories</h4>
                                </div> --}}
                                <div class="categories d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="categories-info">
                                        <h4>Categories</h4>
                                        @foreach ($categories as $category)
                                            <div class="btn btn-light customBtn">
                                                <a href="{{ route('reports', $category->slug) }}">{{ $category->name }} </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @if ($reports)
                                @foreach ($reports as $report)
                                    <div class="col-lg-12 mt-4">
                                        <div class="member d-sm-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                            data-aos-delay="300">
                                            <div class="pic d-flex justify-content-center ">
                                                <img
                                                    src="{{ $report->category->image ? route('home') . '/storage/' . $report->category->image : route('home') . '/assets/img/team/team-3.jpg' }}"
                                                    class="img-fluid w-50" alt="">
                                            </div>
                                            <div class="member-info">
                                                <h4> <a href="{{ route('reportDescription', $report->slug) }}"> {{ Str::limit($report->title, 100) }}</a></h4>
                                                <p>{!! Str::limit($report->description_one, 300) !!}</p>
                                                <br>
                                               
                                                <div class="justify-content-center justify-content-lg-start mb-5">
                                                    <a href="{{ route('reportDescription', $report->slug) }}" class=" btn-learn-more d-block d-sm-inline-block btn-get-started scrollto">
                                                        <i class="ri-eye-fill"></i></i> View Report
                                                    </a>
                                                    
                                                    <a href="{{ route('rquestSample', $report->slug) }}"
                                                        class=" btn-learn-more d-block d-sm-inline-block btn-get-started scrollto mr-sm-2 ml-sm-2">
                                                        <i class="ri-file-fill"></i> Request A Sample
                                                    </a>
                                                   
                                                    <a href="{{ route('rquestSample', $report->slug) }}" class=" btn-learn-more d-block d-sm-inline-block btn-get-started scrollto">
                                                        <i class="ri-phone-fill"></i> Inquiry Before Buying
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <br><br>
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {!! $reports->links() !!}
                        </div>
                        @endif
                        @if (count($reports) == 0)
                            <div class="col-lg-12 mt-4">
                                <h1 class="text-center">No Reports Found....!</h1>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
    <script></script>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            // Configure/customize these variables.
            var showChar = 400; // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more";
            var lesstext = "Show less";


            $('.more').each(function() {
                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext +
                        '&nbsp;</span><span class="morecontent"><span>' + h +
                        '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function() {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>
@endsection
