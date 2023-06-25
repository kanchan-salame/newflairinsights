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
.section-title h2 {
  color: black;
}
</style>
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

    .roller {
        height: 4.125rem;
        line-height: 4rem;
        position: relative;
        overflow: hidden;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;

        color: #0D6EFD;
    }


    #spare-time {
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
        0% {
            top: 0;
        }

        25% {
            top: -4rem;
        }

        50% {
            top: -8rem;
        }

        72.5% {
            top: -12.25rem;
        }
    }

    @media screen and (max-width: 600px) {
        h1 {
            text-align: center;
            text-transform: uppercase;
            color: #F1FAEE;
            font-size: 2.125rem;
        }

        .roller {
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
            0% {
                top: 0;
            }

            25% {
                top: -2.125rem;
            }

            50% {
                top: -4.25rem;
            }

            72.5% {
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
        width: 44ch;
        animation: typing 2s steps(43), blink .5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid;
        font-family: 'Poppins';
        font-size: 2em;
        font-weight: bold;
    }

    .typing-demo-mobile {
        width: 44ch;
        animation: typing 2s steps(43), blink .5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid;
        font-family: monospace;
        font-size: 2em;
        font-weight: bold;
        display: none;
    }


    @media screen and (max-width: 1000px) {
        .typing-demo {
            font-size: 25px !important;
        }



        .roller #rolltext {
            font-size: 35px;
        }

        #spare-time {
            font-size: 22px;
        }
    }

    @media screen and (max-width: 1100px) {

        .roller #rolltext {
            font-size: 25px;
        }
    }


    @media screen and (max-width: 700px) {
        .typing-demo {
            /* font-size: 14px !important; */
            display: none;
        }

        .typing-demo-mobile {
            font-size: 22px !important;
            display: block;
            width: 100%;
        }
        .herotext h2.frame-5 {
            font-size: 14px;
            line-height: 30px
        }

        .roller #rolltext {
            font-size: 20px;
        }
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
    .slide{
        padding: 0px;
    }

    .herotext h2.frame-5 {
	-webkit-animation: none;
	-moz-animation: none;
	-ms-animation: none;
	animation: none;
	color: transparent;
	text-shadow: 0px 0px 1px #fff;
    text-transform: capitalize;
}
.herotext h2.frame-5 span {
	-webkit-animation: blurFadeIn 3s ease-in 3s backwards;
	-moz-animation: blurFadeIn 1s ease-in 3s backwards;
	-ms-animation: blurFadeIn 3s ease-in 3s backwards;
	animation: blurFadeIn 3s ease-in 3s backwards;
	color: transparent;
	text-shadow: 0px 0px 1px #fff;
}
.herotext h2.frame-5 span:nth-child(2) {
	-webkit-animation-delay: 4s;
	-moz-animation-delay: 4s;
	-ms-animation-delay: 4s;
	animation-delay: 4s;
}
.herotext h2.frame-5 span:nth-child(3) {
	-webkit-animation-delay: 5s;
	-moz-animation-delay: 5s;
	-ms-animation-delay: 5s;
	animation-delay: 5s;
}
.herotext h2.frame-5 span:nth-child(4) {
	-webkit-animation-delay: 6s;
	-moz-animation-delay: 6s;
	-ms-animation-delay: 6s;
	animation-delay: 6s;
}
.herotext h2.frame-5 span:nth-child(5) {
	-webkit-animation-delay: 7s;
	-moz-animation-delay: 7s;
	-ms-animation-delay: 7s;
	animation-delay: 7s;
}
/**/

@-webkit-keyframes blurFadeInOut {
	0% {
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-webkit-transform: scale(1.3);
	}
	20%, 75% {
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-webkit-transform: scale(1);
	}
	100% {
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		-webkit-transform: scale(0);
	}
}
@-webkit-keyframes blurFadeIn {
	0% {
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-webkit-transform: scale(1.3);
	}
	50% {
		opacity: 0.5;
		text-shadow: 0px 0px 10px #fff;
		-webkit-transform: scale(1.1);
	}
	100% {
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-webkit-transform: scale(1);
	}
}
@-webkit-keyframes fadeInBack {
	0% {
		opacity: 0;
		-webkit-transform: scale(0);
	}
	50% {
		opacity: 0.4;
		-webkit-transform: scale(2);
	}
	100% {
		opacity: 0.2;
		-webkit-transform: scale(5);
	}
}
@-webkit-keyframes fadeInRotate {
	0% {
		opacity: 0;
		-webkit-transform: scale(0) rotate(360deg);
	}
	100% {
		opacity: 1;
		-webkit-transform: scale(1) rotate(0deg);
	}
}
/**/
@-moz-keyframes blurFadeInOut {
	0% {
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-moz-transform: scale(1.3);
	}
	20%, 75% {
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-moz-transform: scale(1);
	}
	100% {
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		-moz-transform: scale(0);
	}
}
@-moz-keyframes blurFadeIn {
	0% {
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		-moz-transform: scale(1.3);
	}
	100% {
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		-moz-transform: scale(1);
	}
}
@-moz-keyframes fadeInBack {
	0% {
		opacity: 0;
		-moz-transform: scale(0);
	}
	50% {
		opacity: 0.4;
		-moz-transform: scale(2);
	}
	100% {
		opacity: 0.2;
		-moz-transform: scale(5);
	}
}
@-moz-keyframes fadeInRotate {
	0% {
		opacity: 0;
		-moz-transform: scale(0) rotate(360deg);
	}
	100% {
		opacity: 1;
		-moz-transform: scale(1) rotate(0deg);
	}
}
/**/
@keyframes blurFadeInOut {
	0% {
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		transform: scale(1.3);
	}
	20%, 75% {
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		transform: scale(1);
	}
	100% {
		opacity: 0;
		text-shadow: 0px 0px 50px #fff;
		transform: scale(0);
	}
}
@keyframes blurFadeIn {
	0% {
		opacity: 0;
		text-shadow: 0px 0px 40px #fff;
		transform: scale(1.3);
	}
	50% {
		opacity: 0.5;
		text-shadow: 0px 0px 10px #fff;
		transform: scale(1.1);
	}
	100% {
		opacity: 1;
		text-shadow: 0px 0px 1px #fff;
		transform: scale(1);
	}
}
@keyframes fadeInBack {
	0% {
		opacity: 0;
		transform: scale(0);
	}
	50% {
		opacity: 0.4;
		transform: scale(2);
	}
	100% {
		opacity: 0.2;
		transform: scale(5);
	}
}
@keyframes fadeInRotate {
	0% {
		opacity: 0;
		transform: scale(0) rotate(360deg);
	}
	100% {
		opacity: 1;
		transform: scale(1) rotate(0deg);
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
                <div class="mask" style="background-color: rgba(0, 0, 20, 0.3)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="herotext text-white text-center mobile-text" style="width: 100%;">
                            <div class="wrapper">
                                <div class="typing-demo">
                                    We Are A New Age Growth Consulting Firm
                                </div>

                                <div class="typing-demo-mobile">
                                    We Are A New Age <br>Growth Consulting Firm
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
                        <div class="sp-content">
                            <h2 class="frame-5">
                                <span>We Deep Dive Track Pulse Of The Market</span><br>
                                <span>And Share Value To Our Clients Through</span><br>
                                <span>Hyperintelligence Solutions And Take Them Ahead On Growth Curve</span><br>
                                <span></span><br>
                            </h2>
                        </div>


                            {{-- <div class="roller">
                                <span id="rolltext">We deep dive<br />
                                    track pulse of the market<br />
                                    and share value to our clients through<br />
                                    <span id="spare-time">hyperintelligence solutions and take them ahead on growth
                                        curve</span><br />
                            </div> --}}
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
                <div class="contact-box "><a class="" href="{{ route('contactUs') }}">
                    <button class="news-box-heading heading-btn blink_me btn text-light px-5 py-2 mb-4" id="blink_btn">For More Information</button></a><br />
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
