@extends('layouts.applayout')
@section('content')
    <style>
        .member-info h3 strong {
            font-weight: normal;
            font-size: 15px;
        }

        .img-fluid {
            max-width: 100%;
            height: 210px;
        }

        #hero {
            height: 400px !important;
        }

        .hero-img img {
            float: right;
        }

        .descriptionText {
            width: 1000px;
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
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{{ $categoyData->name }}</h1>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ $categoyData->image ? route('home') . '/storage/' . $categoyData->image : route('home') . '/assets/img/team/team-3.jpg' }}"
                        class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <div class="descriptionText more">
        Many infrastructure projects have been forced to reconsider their plans due to the rapidly rising population.
        The building industry has become one of the greatest contributors to local and global economies as a result of
        new urbanized trends. Governments are providing key services such as "smart cities waiver schemes" to building
        companies who promise to use sustainable methods to accommodate a growing population.
        <br><br>

        Although the packaging business began as a rigid packaging supplier, the flexible packaging market is now on the
        increase. Whatever the cause, it has eventually aided in increasing the total storage life of items.Packaging
        companies are increasingly turning to recyclable materials, sparing the industry time and money.
        <br><br>

        The mining sector has aided humanity in making the transition to a better way of life. It provides raw elements
        that are commonly exploited in daily life. The use of cutting-edge technology increases not just the
        productivity of participating enterprises, but also the economies of dependent nations. Growing per-capita raw
        material consumption would undoubtedly aid established players in maintaining their services for a longer length
        of time.
        <br><br>

        Packaging is the term used to describe the process of creating, assessing, and producing packages. Packaging is
        a system for organizing items for transportation, warehousing, logistics, sale, and final use. Packaging helps
        to protect, store, distribute, educate, and market products. It is thoroughly interwoven into government,
        corporate, institutional, industrial, and personal use in many nations.
        <br><br>

        Building and construction are two distinct labels that can be combined into a single statement. They are broad
        phrases that describe the art and science of creating items, systems, and institutions. It refers to the
        procedures for constructing buildings, infrastructure, and industrial amenities. It records for a major amount
        of a country's GDP. This market category may be divided into three groups: construction, infrastructure, and
        industrial.
        <br><br>

        In the mining business, drilling and extraction equipment is widely used. They're mostly used in the oil and gas
        industry's upstream activities. Depending on the financial situation of the institution, it can either own or
        rent such equipment as needed. Drilling and extraction machinery rental companies have an advantage in the
        market. Drilling and extraction rigs are part of a larger system that drills the surface of the ground. They are
        massive buildings that hold drilling and ore extraction equipment.
        <br><br>

        Industrial gases are gaseous compounds that are created for use in industry. Industrial gases are gases that are
        released as a result of chemical operations in factories. Nitrogen, argon, carbon dioxide, hydrogen helium,
        carbon monoxide, and acetylene are among the most common industrial gases. In gas cylinders, compressed versions
        of such gases are accessible. Industrial gases are one of the main causes of acid rain. For commercial sale and
        purchase, air separation facilities are used to purify air and separate the component gases.
        <br><br>

        Labels and tags are an integral aspect of every product's packaging. They include all relevant product
        information, such as the highest retail price, production date, expiration date, storage conditions,
        ingredients, and, in certain cases, the mode of use. Labels and tags may also include customer service numbers
        and product disclaimers, depending on the requirements of the nation in which a product is created.
        <br><br>

        Metals and minerals are widely used in everyday life. Mining Minerals and Metals are operations carried out by
        companies in the mining market category. Mineral and metal extraction is a specialist subject of metallurgical
        science. When metals and minerals are mined, they are in the form of ores, which are raw materials. The ores
        must be treated and refined before they can be utilised in industries or even on a small scale.
        <br><br>

        Some items have specific packaging needs that are part of the design process. Toxicologists and food experts
        must determine that the use of such packaging materials is legal. Under typical settings, packaging engineers
        must guarantee that the completed package will keep the product safe for the period of its stated shelf life.
        Validation of packing techniques, labelling, distribution, and sale is essential to guarantee that they comply
        with health-related regulations.
        <br><br>

        There are a variety of packing options. A transport package, also known as a distribution package, is a
        transportation container that is used to distribute, store, and manage the product or inside parcels. A consumer
        package, according to certain definitions, is one that is marketed towards a single person or family. Medical
        device packaging, bulk chemical packaging, over-the-counter medicine packaging, retail packaged food, army
        materiel packaging, pharmaceutical packaging, and so on.
        <br><br>

        A systematic project planning and project management methodology is required for all but the smallest package
        design and development projects. Some package types necessitate a quality management system as well as
        Verification and Validation procedures, while others are recommended.
        <br><br>

        An effective and efficient packing process is crucial for the company's logistics. The objective is to guarantee
        that goods move safely throughout the distribution chain and arrive at their destination in the same condition
        as when they left the warehouse. Packaging plays an important role in this process, starting with the selection
        of suitably robust packing materials that can withstand the rigours of transit.
        <br><br>

        When it comes to delivery preparation, it also helps you to properly store items so that you can stack loads,
        arrange them on pallets, and move them to the warehouse with ease. When objects are being prepared for shipment,
        protective packaging is utilised to minimise movement and prevent damage.
        <br><br>

        Packaging protects items while also assisting with transportation, storage, and conveying crucial handling
        instructions, all while advertising the corporation. With the right packing and procedures, you can ship large
        volumes efficiently, saving space, money, and time. Your belongings' safety and preservation are always first
        and foremost, and packing plays an important role in guaranteeing that they arrive in excellent condition at
        their end destination.
        <br><br>

        If it fails to satisfy this primary purpose, it may cause shipping or logistical problems, necessitating the
        item's repair or replacement before
        
        it can be re-delivered. This leads to not just increased expenditures, but
        also a decrease in customer pleasure and reputation. In the long term, taking the effort to ensure that your
        luggage is fully packed for travel can save you money and time.
        <br><br>
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
                                        <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                            data-aos-delay="300">
                                            <div class="pic"><img
                                                    src="{{ $report->category->image ? route('home') . '/storage/' . $report->category->image : route('home') . '/assets/img/team/team-3.jpg' }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <div class="member-info">
                                                <h4>{{ Str::limit($report->title, 100) }}</h4>
                                                <p>{!! Str::limit($report->description_one, 300) !!}</p>
                                                <br>
                                                <div class="d-flex">
                                                    <a href="{{ route('reportDescription', $report->slug) }}"
                                                        class="btn-learn-more"><i class="ri-eye-fill"></i>
                                                        View Report</a>&nbsp;&nbsp;&nbsp;
                                                    <a href="{{ route('rquestSample', $report->slug) }}"
                                                        class="btn-learn-more"><i class="ri-file-fill"></i>
                                                        Request A Sample</a>&nbsp;&nbsp;&nbsp;
                                                    <a href="{{ route('sendAQuery', $report->slug) }}"
                                                        class="btn-learn-more"><i class="ri-phone-fill"></i>
                                                        Inquiry Before Buying</a>
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
