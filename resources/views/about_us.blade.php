@extends('layouts.applayout')
@section('content')
<style>
    .blink_me {
  animation: blinker 1s linear infinite;
  background-color:  #F37735;
}

@keyframes blinker {
  
    10% {
    background-color: rgb(0, 0, 255);
  }
    100% {
    background-color:  #F37735;
    }
}
</style>
<main id="main">
    <!-- ======= About Us Section ======= -->

    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">

        <link rel="stylesheet" href="{{route('home')}}/assets/css/home.css">
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="">
                <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                    <source class="h-100" src="{{ route('home') }}/assets/video/avc_My Video13.mp4" type="video/mp4" />
                </video>
                <div class="mask" style="background-color: rgba(0, 0, 20, 0.8)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="herotext text-white text-center mobile-text">
                            <h1 class="mb-3 animation1 animate__animated animate__zoomIn">WE ARE A <span
                                    class="text-info animation4 animate__animated animate__bounce"
                                    style="text-shadow: 1px 1px skyblue"> NEW</span> AGE GROWTH</h1>

                            <h1 class="mb-3 mb-3 animation2 animate__animated animate__zoomIn" style="">CONSULTING
                                COMPANY
                            </h1>
                            <hr class="animation3 animate__animated animate__zoomIn">
                            <marquee class="" scrollamount="10" behavior="scroll">
                                We deep dive - track pulse of the market - and share value to our clients through
                                hyperintelligence solutions and take them ahead on growth curve
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <!-- <div class="mb-5" style=" background: url({{ route('home') }}/assets/img/aboutus.jpg) no-repeat fixed center;background-size: auto; height:50vh">
                <h1 class="text-light">About Us</h1>
                </div> -->
            <div class="section-title mt-3">
                <h2>About Us</h2>
            </div>

            <div class="row content mb-5">
                <div class="col-lg-6">
                    <p class="text-justify">
                        Flair Insights is a premium market research and business consulting organization which offers
                        market intelligence, business consulting, and market research solutions. Research is our core
                        practice, and we at Flair Insights work with the mission of “Research that Fuels Innovation”. We
                        produce tailor made industry and market intelligence reports, white papers, and databanks
                        knowledge driven products/services to cater our consumers including leading corporations,
                        non-profit organizations, universities and government institutions. Our research and subject
                        matter experts puts their years of experience in creating well-crafted industry and market
                        specific reports to help our clients take informed decisions.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p class="text-justify">
                        Our main goal is to assist and partner organizations to make lasting strategic improvements and
                        realize growth targets. Our industry research reports are designed to provide granular
                        quantitative information, combined with key industry insights, aimed at assisting sustainable
                        organizational development. Therefore, we serve clients on every aspect of strategy, including
                        product development, application modeling, exploring new markets and tapping into niche growth
                        opportunities.
                    </p>
                </div>
            </div>

            <p class="text-justify">
                Flexibility is our USP that makes us unique. We closely work with our clients to understand their
                organizational objectives. This helps us to custom design suitable revenue impacting strategy for every
                client. Our research experts parallelly works with every client to bridge the gap between existing
                client scenario and desired revenue projections through creating deep-dive research solution.
            </p>


            <div class="section-title">
                <h2>Our vision</h2>
            </div>

            <div class="row content mb-5">
                <div class="col-lg-12">
                    <p class="text-justify">
                        To create a unique space in the global industry and be identified as the most consistent and
                        committed growth partner for market research, strategy formulation, and sustainable
                        organizational development.
                    </p>
                </div>
            </div>

            <div class="section-title">
                <h2>Our mission</h2>
            </div>

            <div class="row content mb-5">
                <div class="col-lg-12">
                    <p class="text-justify">
                        “Research That Fuels Innovation” Being a value-driven organization, our mission is to deliver
                        practical and enduring results, driven by accurate and timely research, that enable our clients
                        to take strategic decisions and achieve growth objectives.
                    </p>
                </div>
            </div>

            <div class="section-title">
                <h2>Our values</h2>
            </div>

            <div class="row content mb-5">
                <div class="col-lg-12 ">
                    <ul>
                        <li><i class="ri-check-double-line"></i> Client confidentiality</li>
                        <li><i class="ri-check-double-line"></i> Integrity and accountability</li>
                        <li><i class="ri-check-double-line"></i> Commitment towards making a positive difference for our
                            clients</li>
                    </ul>
                </div>
            </div>

            <div class="container mt-4 text-center">
                <div class="contact-box ">
                    <button class="news-box-heading heading-btn blink_me btn text-light px-5 py-2 mb-4" id="blink_btn">For More Information</button><br />
                    <!--<p class="firstnews f17 text-center">Call: +91 12345 67890</p>-->
                    <p class="f17 text-center">Mail us at: <a
                            href="mailto:sales@flairinsights.com?Subject=Flair%20Insights%20Enquiry" class="orange"
                            target="_top">sales@flairinsights.com</a></p>
                    <span><hr style=""></span>
                </div>
                <br clear="both" />
            </div>
    </section><!-- End About Us Section -->
</main><!-- End #main -->
@endsection