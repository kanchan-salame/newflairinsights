@extends('layouts.applayout')
@section('content')

<!-- *************Home styles and scripts Page Links************ -->
<link rel="stylesheet" href="{{ route('home') }}/assets/css/testimonial.css" />
<link rel="stylesheet" href="{{ route('home') }}/assets/css/home.css" />
<link rel="stylesheet" href="{{ route('home') }}/assets/css/clients.css" />
<link rel="stylesheet" href="{{ route('home') }}/assets/css/bootstrap-video-carousel.min.css" />
<!-- tegrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<!-- *************Home styles and scripts Page Links ends************ -->

<style>
    /* *********vedio text animation******** */

.animation1 {
    animation-name: zoomIn;
    /* animation-iteration-count:infinite; */
    animation-duration: 6s;
    animation-delay: 1s;
}

.animation2 {
    animation-name: zoomIn;
    /* animation-iteration-count:infinite; */
    animation-duration: 6s;
    animation-delay: 2s;
}

.animation3 {
    animation-name: zoomIn;
    /* animation-iteration-count:infinite; */
    animation-duration: 6s;
    animation-delay: 4s;
}

.animation4 {
    animation-name: zoomIn;
    animation-iteration-count: infinite;
    animation-duration: 5s;
    animation-delay: 2s;
}

.roller{
  height: 4.125rem;
  line-height: 4rem;
  position: relative;
  overflow: hidden;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;

  color: #1D3557;
}


#spare-time{
  font-size: 1rem;
  font-style: italic;
  /* letter-spacing: 1rem; */
  margin-top: 0;
  color: #A8DADC;
  font-size: 35px;
font-weight: bold;
text-transform: uppercase;

}

.roller #rolltext {
  position: absolute;
  top: 0;
  animation: slide 5s infinite;
  font-size: 50px;
font-weight: bold;
text-transform: uppercase;
}

@keyframes slide {
  0%{
    top:0;
  }
  25%{
    top: -4rem;
  }
  50%{
    top: -8rem;
  }
  72.5%{
    top: -12.25rem;
  }
}

@media screen and (max-width: 600px){
  h1{
  text-align:center;
  text-transform: uppercase;
  color: #F1FAEE;
  font-size: 2.125rem;
}

  .roller{
  height: 2.6rem;
  line-height: 2.125rem;
  }

  #spare-time {
    font-size: 1rem;
    letter-spacing: 0.1rem;
  }

  .roller #rolltext {
  animation: slide-mob 5s infinite;
}

  @keyframes slide-mob {
  0%{
    top:0;
  }
  25%{
    top: -2.125rem;
  }
  50%{
    top: -4.25rem;
  }
  72.5%{
    top: -6.375rem;
  }
}
}

.word {
  margin: auto;
  color: white;
  font: 700 normal 2.5em 'tahoma';
  text-shadow: 5px 2px #222324, 2px 4px #222324, 3px 5px #222324;
  font-size: 50px;
}

.wrapper {
  /* height: 100vh; */
  /*This part is important for centering*/
  display: grid;
  place-items: center;
  font-size: 25px;
}

.typing-demo {
  width: 43ch;
  animation: typing 2s steps(43), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: monospace;
  font-size: 2em;
}

@keyframes typing {
  from {
    width: 0
  }
}

@keyframes blink {
  50% {
    border-color: transparent
  }
}
</style>
<!-- Carousel wrapper -->
<div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">

    <div class="carousel-inner">
        <!-- Single item -->
        <div class="">
            <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                <source class="h-100" src="{{ route('home') }}/assets/video/avc_My Video13.mp4" type="video/mp4" />
            </video>
            <div class="mask" style="background-color: rgba(0, 0, 20, 0.8)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="herotext text-white text-center mobile-text" style="width: 100%;">
                        <div class="wrapper">
                            <div class="typing-demo">
                                WE ARE A NEW AGE GROWTH CONSULTING COMPANY.
                            </div>
                        </div>
                        {{-- <h1 class="word"></h1>  --}}
                        <br><br>
                        {{-- <h1 class="mb-3 animation1 animate__animated animate__zoomIn">WE ARE A <span
                                class="text-info animation4 animate__animated animate__bounce"
                                style="text-shadow: 1px 1px skyblue"> NEW</span> AGE GROWTH</h1> --}}

                        {{-- <h1 class="mb-3 mb-3 animation2 animate__animated animate__zoomIn" style="">CONSULTING COMPANY
                        </h1>
                        <hr class="animation3 animate__animated animate__zoomIn"> --}}


                        {{-- <marquee class="" scrollamount="10" behavior="scroll">
                            We deep dive - track pulse of the market - and share value to our clients through
                            hyperintelligence solutions and take them ahead on growth curve
                        </marquee> --}}

                        <div class="roller">
                            <span id="rolltext">We deep dive<br/>
                                track pulse of the market<br/>
                                and share value to our clients through<br/>
                            <span id="spare-time">hyperintelligence solutions and take them ahead on growth curve</span><br/>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<main id="main">
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
    <div class="container-fluid my-5" style="background-color:#01123d">
        <div class="container py-5">

            <section class="customer-logos slider py-3">
                <div class="slide "><img src="{{route('home')}}/assets/img/clients/BASF.png"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Bridgestone.png" class="img-center1">
                </div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/CAMSO.png"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Elanco.png" class="img-center2"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/GAF.png"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/IBM.png" class="img-center2"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/JSL.png" class="img-center1"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Kawasaki.png" class="img-center1">
                </div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/KPMG.png" class="img-center2"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Leica.png"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/LG.png" class="img-center2"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Mahindra.png" class="img-center1">
                </div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Michelin.png" class="img-center1">
                </div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/Microsoft.png" class="img-center2">
                </div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/MotorcarPartsofAmerica.png"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/NOV.png" class="img-center2"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/PHILIPS.png" class="img-center1">
                </div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/SELO.png"></div>
                <div class="slide"><img src="{{route('home')}}/assets/img/clients/TSI.png"></div>

            </section>
        </div>
    </div>

    <!-- ======= Clients Section Ends ======= -->



    <!-- /* Testimonial HTML */ -->
    <div class="container-fluid px-3 px-sm-5 my-5 text-center py-3">
        <div class="container">
            <div class="section-title pt-4">
                <h2 class="mb-5 ">What Our Client Say's</h2>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item card first prev rounded-5 border-3 border-info py-2" style="border:3px solid">
                    <div class=" overflow-hidden">
                        <span></span>
                        <h4 class="mb-3 mt-2">Vice President</h4>
                        <h4 class="d-flex justify-content-center">
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                        </h4>
                        <p class="font-weight-bold pt-3" style="color:gray"><i>Corporate Planning</i></p>
                        <p class="content mb-3 mx-2 px-5">We had a great experience working with Flair Insights over the
                            past few months.
                            They truly understand our requirement and provide excellent quality of report and customer
                            service.</p>
                    </div>
                </div>
                <div class="item card show rounded-5 py-2 border-3 border-info " style="border:3px solid">
                    <div class=" overflow-hidden ">

                        <h4 class="mb-3 mt-2">Director</h4>
                        <h4 class="d-flex justify-content-center">
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                        </h4>
                        <p class="font-weight-bold pt-3" style="color:gray"><i>Sales & Marketing</i></p>
                        <p class="content  mb-3 mx-2 px-4">We are happy and satisfied with the purchase of a quality
                            report.
                            They have proved their worth by delivering valuable, usable insights as and when we needed.
                            Good work. Keep it up.</p>
                    </div>
                </div>
                <div class="item next card rounded-5  py-2 border-3 border-info px-3" style="border:3px solid">
                    <div class=" border-0 overflow-hidden">

                        <h4 class="mb-3 mt-2">Senior Vice President</h4>
                        <h4 class="d-flex justify-content-center">
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                        </h4>
                        <p class="font-weight-bold pt-3" style="color:gray"><i>Corporate Planning</i></p>
                        <p class="content mb-3 mx-2 px-4">Flair insights provide us in-depth analysis, quality of the
                            report and the level of knowledge with actionable insights.
                            Everyone in our team is impressed so our company would like to continue working with you in
                            near future.</p>
                    </div>
                </div>
                <div class="item card last rounded-5  py-2 border-3 border-info" style="border:3px solid">
                    <div class=" border-0 overflow-hidden">

                        <h4 class="mb-3 mt-2">Director</h4>
                        <h4 class="d-flex justify-content-center">
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                            <span class="fa fa-star star"></span>
                        </h4>
                        <p class="font-weight-bold pt-3" style="color:gray"><i>FMCG Company</i></p>
                        <p class="content mb-3 mx-2 px-4">They are committed toward delivering intensive reports with
                            the facility of innovatively designed
                            and developed data processing and analysis division. Thanks Flair Insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /* Ends Testimonial HTML */ -->


    @endsection

    @section('script')
<script>
    var words = ['WE ARE A NEW AGE GROWTH CONSULTING COMPANY',],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 100;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});
</script>
    <script src="{{ route('home') }}/assets/js/testimonial.js"></script>
    <script src="{{ route('home') }}/assets/js/clients.js"></script>
    <script type="text/javascript" src="{{ route('home') }}/assets/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    @endsection
