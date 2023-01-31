@extends('layouts.applayout')
@section('content')
    <style>
        #myVideo {
            position: relative;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .content {
            position: relative;
            background: rgba(0, 0, 0, 0.3);
            color: #f1f1f1;
            padding: 20px;
            width: 700px;
            margin: 0 auto;
            text-align: center;
            font-weight: bold;
            top: -100%;
        }

        .content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        #video-section {
            position: relative;
            margin: 0px;
            padding: 0px;
            height: 800px;
        }

        svg {
            display: block;
            overflow: visible;
        }

        .slider-container {
            position: relative;
            height: 800px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: all-scroll;
        }

        .slider-control {
            z-index: 2;
            position: absolute;
            top: 0;
            width: 12%;
            height: 100%;
            transition: opacity 0.3s;
            will-change: opacity;
            opacity: 0;
        }

        .slider-control.inactive:hover {
            cursor: auto;
        }

        .slider-control:not(.inactive):hover {
            opacity: 1;
            cursor: pointer;
        }

        .slider-control.left {
            left: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.18) 0%, rgba(0, 0, 0, 0) 100%);
        }

        .slider-control.right {
            right: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.18) 100%);
        }

        .slider-pagi {
            position: absolute;
            z-index: 3;
            left: 50%;
            bottom: 2rem;
            transform: translateX(-50%);
            font-size: 0;
            list-style-type: none;
        }

        .slider-pagi__elem {
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: 2rem;
            height: 2rem;
            margin: 0 0.5rem;
            border-radius: 50%;
            border: 2px solid #fff;
            cursor: pointer;
        }

        .slider-pagi__elem:before {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 1.2rem;
            height: 1.2rem;
            background: #fff;
            border-radius: 50%;
            transition: transform 0.3s;
            transform: translate(-50%, -50%) scale(0);
        }

        .slider-pagi__elem.active:before,
        .slider-pagi__elem:hover:before {
            transform: translate(-50%, -50%) scale(1);
        }

        .slider {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .slider.animating {
            transition: transform 0.5s;
            will-change: transform;
        }

        .slider.animating .slide__bg {
            transition: transform 0.5s;
            will-change: transform;
        }

        .slide {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .slide.active .slide__overlay,
        .slide.active .slide__text {
            opacity: 1;
            transform: translateX(0);
        }

        .slide__bg {
            position: absolute;
            top: 0;
            left: -50%;
            width: 100%;
            height: 100%;
            background-size: cover;
            will-change: transform;
        }



        .slide:nth-child(1) {
            left: 0;
        }

        .slide:nth-child(1) .slide__bg {
            left: 0;
            background-image: url("{{ route('home') }}/assets/img/herobanner_1.jpg");
        }

        .slide:nth-child(1) .slide__overlay-path {
            fill: #015287;
        }

        @media (max-width: 991px) {
            .slide:nth-child(1) .slide__text {
                background-color: rgba(233, 156, 126, 0.8);
            }
        }

        .slide:nth-child(2) {
            left: 100%;
        }

        .slide:nth-child(2) .slide__bg {
            left: -50%;
            background-image: url("{{ route('home') }}/assets/img/herobanner_2.jpg");
        }

        .slide:nth-child(2) .slide__overlay-path {
            fill: #c4c400;
        }

        @media (max-width: 991px) {
            .slide:nth-child(2) .slide__text {
                background-color: rgba(225, 204, 174, 0.8);
            }
        }

        .slide:nth-child(3) {
            left: 200%;
        }

        .slide:nth-child(3) .slide__bg {
            left: -100%;
            background-image: url("{{ route('home') }}/assets/img/herobanner_3.jpg");
        }

        .slide:nth-child(3) .slide__overlay-path {
            fill: #eef9fe;
        }

        @media (max-width: 991px) {
            .slide:nth-child(3) .slide__text {
                background-color: rgba(173, 197, 205, 0.8);
            }
        }

        .slide:nth-child(4) .slide__overlay-path {
            fill: #cbc6c3;
        }

        @media (max-width: 991px) {
            .slide:nth-child(4) .slide__text {
                background-color: rgba(203, 198, 195, 0.8);
            }
        }

        .slide__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .slide__overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 100%;
            min-height: 810px;
            transition: transform 0.5s 0.5s, opacity 0.2s 0.5s;
            will-change: transform, opacity;
            transform: translate3d(-20%, 0, 0);
            opacity: 0;
        }

        @media (max-width: 991px) {
            .slide__overlay {
                display: none;
            }
        }

        .slide__overlay path {
            opacity: 0.8;
        }

        .slide__text {
            position: absolute;
            width: 50%;
            bottom: 15%;
            left: 12%;
            color: #fff;
            transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
            will-change: transform, opacity;
            transform: translateY(-50%);
            opacity: 0;
        }

        @media (max-width: 991px) {
            .slide__text {
                left: 0;
                bottom: 0;
                width: 100%;
                height: 20rem;
                text-align: center;
                transform: translateY(50%);
                transition: transform 0.5s 0.5s, opacity 0.5s 0.5s;
                padding: 0 1rem;
            }
        }

        .slide__text-heading {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        @media (max-width: 991px) {
            .slide__text-heading {
                line-height: 20rem;
                font-size: 3.5rem;
            }
        }

        .slide__text-desc {
            font-size: 24px;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 991px) {
            .slide__text-desc {
                display: none;
            }
        }

        .slide__text-link {
            z-index: 5;
            display: inline-block;
            position: relative;
            padding: 0.5rem;
            cursor: pointer;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-size: 2.3rem;
            perspective: 1000px;
        }

        @media (max-width: 991px) {
            .slide__text-link {
                display: none;
            }
        }

        .slide__text-link:before {
            z-index: -1;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            transform-origin: 50% 100%;
            transform: rotateX(-85deg);
            transition: transform 0.3s;
            will-change: transform;
        }

        .slide__text-link:hover:before {
            transform: rotateX(0);
        }


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

        /* RESPONSIVE */
        @media screen and (max-width: 767px) {
            .feedback-slider-item:after {
                left: 30px;
                right: 30px;
            }

            .customer-feedback .owl-nav [class*="owl-"] {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                margin-top: 45px;
                bottom: auto;
            }

            .customer-feedback .owl-prev {
                left: 0;
            }

            .customer-feedback .owl-next {
                right: 0;
            }
        }

        .custom-accordion {
            background: #8A6552;
            color: #FFFFFF;
            font-family: 'Sunflower', sans-serif;
            padding-bottom: 2rem;
        }

        .custom-accordion>.item {
            padding: 1rem 2rem;
            margin: 0 auto;
            max-width: 30rem;
        }

        .custom-accordion>.item:last-of-type {
            background: #462521;
            text-align: center;
            border-radius: 0.5rem;
        }

        .custom-accordion>.item:last-of-type>.icon {
            color: #FFFFFF;
        }

        .custom-accordion>.item:nth-of-type(6) {
            padding-bottom: 2rem;
        }

        .custom-accordion>.item>.icon {
            color: #462521;
            font-size: 2rem;
        }

        .custom-accordion>.item>.title {
            font-size: 1.5rem;
        }

        @media screen and (min-width: 800px) and (min-height: 270px) {
            .custom-accordion {
                display: table;
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                height: 400px;
                max-height: 1000px;
                overflow: hidden;
                padding-bottom: 0;
            }

            .custom-accordion>.item {
                display: table-cell;
                position: relative;
                height: 100%;
                padding: 2rem 1rem;
                text-align: center;
                transform-origin: 0 50%;
                transition: all 0.3s cubic-bezier(0.8, 0.16, 0.42, 0.89);
            }

            .custom-accordion>.item:hover:not(:last-of-type) {
                transform: scaleX(2) translateX(-1px);
                box-shadow: 0 0 3rem #301916;
                background: #8A6552;
                border-color: transparent;
            }

            .custom-accordion>.item:hover+.item {
                opacity: 0.1;
            }

            .custom-accordion>.item:hover+.item:last-of-type {
                opacity: 0.1;
                background: #8A6552;
            }

            .custom-accordion>.item:not(:last-of-type) {
                border-right: 1px solid #462521;
            }

            .custom-accordion>.item:last-of-type {
                background: #462521;
                width: 25%;
                border-radius: 0;
            }

            .custom-accordion>.item:last-of-type .heart-icon {
                font-size: 6rem;
            }

            .custom-accordion>.item:hover:last-of-type .heart-icon {
                transform: scale(2);
            }

            .custom-accordion>.item:last-of-type>.title {
                transform: rotate(0) translateX(-50%) translateY(-2.5rem);
                padding: 0;
                text-align: center;
            }

            .custom-accordion>.item:last-of-type>.content {
                opacity: 1;
                transform: translateX(-50%) translateY(-50%);
            }

            .custom-accordion>.item:hover:not(:last-of-type)>.icon {
                transform: scaleX(0.5);
            }

            .custom-accordion>.item:hover:not(:last-of-type)>.title {
                transform: scaleX(0.5) translateX(-50%);
                background: #CA2E55;
                text-align: center;
                padding: 0;
            }

            .custom-accordion>.item:hover:not(:last-of-type)>.title>.text {
                transform: translateX(-50%);
                left: 50%;
            }

            .custom-accordion>.item:hover:not(:last-of-type)>.content {
                opacity: 1;
            }

            .custom-accordion>.item>.icon {
                font-weight: 700;
                font-size: 2rem;
                transition: all 0.3s cubic-bezier(0.8, 0.16, 0.42, 0.89);
                color: #FFFFFF;
            }

            .custom-accordion>.item>.title {
                position: absolute;
                bottom: 0;
                left: 50%;
                height: 1.5rem;
                width: 200%;
                text-align: left;
                transform-origin: 0 50%;
                transform: rotate(-90deg);
                transition: all 0.3s cubic-bezier(0.8, 0.16, 0.42, 0.89);
                font-size: 1.2rem;
            }

            .custom-accordion>.item>.title>.text {
                position: absolute;
                left: 2rem;
                bottom: 0;
                white-space: nowrap;
                transition: all 0.3s cubic-bezier(0.8, 0.16, 0.42, 0.89);
            }

            .custom-accordion>.item>.content {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 200%;
                height: auto;
                transform: translateX(-50%) translateY(-50%) scaleX(0.5);
                transition: all 0.3s cubic-bezier(0.8, 0.16, 0.42, 0.89);
                opacity: 0;
                padding: 1rem;
                pointer-events: none;
            }
        }

        .heart-icon {
            color: #CA2E55;
            font-size: 3rem;
            transition: all 0.3s cubic-bezier(0.8, 0.16, 0.42, 0.89);
        }

        #tabs {
            width: 700px;
            display: flex;
            position: relative;
            margin: 0 auto;
            margin-top: 50px;
            height: auto;
            min-height: 200px;
            max-height: 600px;
            overflow: hidden;
        }

        ul {
            position: relative;
            display: inline-block;
            margin: 0;
            padding: 0;
            list-style-type: none;
            vertical-align: top;
            width: 50%;
        }

        ul li a {
            position: relative;
            display: block;
            width: 100%;
            text-decoration: none;
            color: #3b3b3b;
            border-top: solid 2px #e9e9e9;
            padding: 20px 5px;
            z-index: 1;
            opacity: .5;
            -webkit-transition: 0.3s ease;
            -moz-transition: 0.3s ease;
            -o-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        ul li:focus,
        a:focus {
            outline: none;
        }

        ul li:nth-child(1) a {
            border-top: none;
        }

        ul li a.active {
            opacity: 1;
        }

        .para-a {
            font-weight: bold;
            margin-top: 10px;
            padding: 0;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 1px;
            border: none;
            font-family: 'Montserrat';
            color: #2b2b2b;
        }

        .tag {
            position: relative;
            width: 100%;
        }

        .icon {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 50px;
            background: #c7c7c7;
            border-radius: 100%;
            vertical-align: middle;
        }

        .block {
            position: absolute;
            width: 18px;
            height: 18px;
            vertical-align: middle;
            border: solid 2px #7b7b7b;
            border-radius: 5px;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .circle {
            position: absolute;
            padding: 2px;
            border: solid 2px #7b7b7b;
            border-radius: 100%;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .title {
            display: inline-block;
            text-transform: uppercase;
            font-weight: bold;
            padding: 0 10px;
            vertical-align: middle;
            color: #7b7b7b;
        }

        .addon {
            position: relative;
            width: 80%;
            top: -25px;
            margin-left: 70px;
            letter-spacing: 0;
            font-size: 13px;
            color: #9b9b9b;
            opacity: 0;
            font-family: 'Open Sans';
        }

        .addon.fadein {
            opacity: 1;
        }

        .browser {
            width: 45%;
            height: 95%;
            position: absolute;
            border-style: solid;
            border-width: 2px 0 2px 2px;
            border-color: #7b7b7b transparent #7b7b7b #7b7b7b;
            right: 0;
            border-radius: 10px 0 0 10px;
            overflow: hidden;
        }

        .top-bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            line-height: 20px;
            background: #fff;
            border-bottom: solid 2px #7b7b7b;
            z-index: 2;
        }

        .dot {
            position: relative;
            display: inline-block;
            padding: 4px;
            background: #c7c7c7;
            border-radius: 100%;
        }

        .dot:nth-child(1) {
            margin-left: 7px;
        }

        #tabs-1,
        #tabs-2,
        #tabs-3 {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }

        #tabs-1 {
            background: #9b9b9b;
        }

        #tabs-2 {
            background: #c9c9c9;
        }

        #tabs-3 {
            background: #1b1b1b;
        }


        /*
        *
        * ==========================================
        * CUSTOM UTIL CLASSES
        * ==========================================
        */
        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #45b649;
            background: #fff;
        }


        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }

        @media only screen and (max-width: 500px) {
            #video-section {
                height: 500px;
            }

            #myVideo {
                width: 100%;
            }

            .content h1 {
                font-size: 2rem;
                font-weight: bold;
            }

            .content {
                width: 100%;
                top: -75%;
            }
        }
    </style>

    {{-- Video Section --}}
    <section id="video-section">
        <video autoplay muted loop id="myVideo">
            <source src="{{ route('home') }}/assets/video/test.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="content">
            <h1>WE ARE A AGE GROWTH</h1>
            <h1> CONSULTING COMPANY</h1>
            <hr>
            <p>We deep drive - track pulse of the market - and share value to our clients through hyperintelligence
                solutions
                and take them ahead on growth curve
            </p>
        </div>
    </section>
    {{-- End Video Section --}}

    {{-- Slider --}}

    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">
            <div class="slide slide-0 active">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                    </svg>
                    <div class="slide__text">
                        <h2 class="slide__text-heading">We are Market Research Experts</h2>
                        <p class="slide__text-desc">With our years of expertise in market research we help businesses to
                            identify, acquire, engage, and understand reliable market insights. Our actionable research
                            insights allows companies to uncover new age business complexities and gain competitive
                            advantage. Therefore, through our research and consulting expertise we assist wide range of
                            companies in their growth journey.</p>

                    </div>
                </div>
            </div>
            <div class="slide slide-1 ">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                    </svg>
                    <div class="slide__text">
                        <h2 class="slide__text-heading">To assist our clients on Strategic Intelligence is at the core of
                            what we do</h2>
                        <p class="slide__text-desc">A wining strategy is a formula for sustainable growth, resilience, and
                            innovation; that balances today’s need with tomorrow’s opportunities. In todays modern business
                            world traditional strategies are not suitable for everyone. We at Flair Insights creates best
                            fit strategies for our clients using blend of traditional & modern approaches that deliver
                            tangible benefits and propel collective organizational growth.</p>

                    </div>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                    </svg>
                    <div class="slide__text">
                        <h2 class="slide__text-heading">The Goal is to help companies & create their Sustainable Growth
                            Stories</h2>
                        <p class="slide__text-desc">Our unconventional research approaches starts by seeing your world
                            through the analytical lenses of leading-edge commerce and innovation, with the sharpest view of
                            technology and its impact on businesses. We facilitate best-fit solutions to companies and keep
                            them ahead on the technology curve, propel their growth, identify new opportunities, markets and
                            business models, answer their unknowns; and create your Growth Story </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main">

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
                            <div class="row mt-5">
                                <div class="col-sm-10 pt-5">
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
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            var $slider = $(".slider"),
                $slideBGs = $(".slide__bg"),
                diff = 0,
                curSlide = 0,
                numOfSlides = $(".slide").length - 1,
                animating = false,
                animTime = 500,
                autoSlideTimeout,
                autoSlideDelay = 6000,
                $pagination = $(".slider-pagi");

            function createBullets() {
                for (var i = 0; i < numOfSlides + 1; i++) {
                    var $li = $("<li class='slider-pagi__elem'></li>");
                    $li.addClass("slider-pagi__elem-" + i).data("page", i);
                    if (!i) $li.addClass("active");
                    $pagination.append($li);
                }
            };

            createBullets();

            function manageControls() {
                $(".slider-control").removeClass("inactive");
                if (!curSlide) $(".slider-control.left").addClass("inactive");
                if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
            };

            function autoSlide() {
                autoSlideTimeout = setTimeout(function() {
                    curSlide++;
                    if (curSlide > numOfSlides) curSlide = 0;
                    changeSlides();
                }, autoSlideDelay);
            };

            autoSlide();

            function changeSlides(instant) {
                if (!instant) {
                    animating = true;
                    manageControls();
                    $slider.addClass("animating");
                    $slider.css("top");
                    $(".slide").removeClass("active");
                    $(".slide-" + curSlide).addClass("active");
                    setTimeout(function() {
                        $slider.removeClass("animating");
                        animating = false;
                    }, animTime);
                }
                window.clearTimeout(autoSlideTimeout);
                $(".slider-pagi__elem").removeClass("active");
                $(".slider-pagi__elem-" + curSlide).addClass("active");
                $slider.css("transform", "translate3d(" + -curSlide * 100 + "%,0,0)");
                $slideBGs.css("transform", "translate3d(" + curSlide * 50 + "%,0,0)");
                diff = 0;
                autoSlide();
            }

            function navigateLeft() {
                if (animating) return;
                if (curSlide > 0) curSlide--;
                changeSlides();
            }

            function navigateRight() {
                if (animating) return;
                if (curSlide < numOfSlides) curSlide++;
                changeSlides();
            }

            $(document).on("mousedown touchstart", ".slider", function(e) {
                if (animating) return;
                window.clearTimeout(autoSlideTimeout);
                var startX = e.pageX || e.originalEvent.touches[0].pageX,
                    winW = $(window).width();
                diff = 0;

                $(document).on("mousemove touchmove", function(e) {
                    var x = e.pageX || e.originalEvent.touches[0].pageX;
                    diff = (startX - x) / winW * 70;
                    if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /=
                        2;
                    $slider.css("transform", "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)");
                    $slideBGs.css("transform", "translate3d(" + (curSlide * 50 + diff / 2) +
                        "%,0,0)");
                });
            });

            $(document).on("mouseup touchend", function(e) {
                $(document).off("mousemove touchmove");
                if (animating) return;
                if (!diff) {
                    changeSlides(true);
                    return;
                }
                if (diff > -8 && diff < 8) {
                    changeSlides();
                    return;
                }
                if (diff <= -8) {
                    navigateLeft();
                }
                if (diff >= 8) {
                    navigateRight();
                }
            });

            $(document).on("click", ".slider-control", function() {
                if ($(this).hasClass("left")) {
                    navigateLeft();
                } else {
                    navigateRight();
                }
            });

            $(document).on("click", ".slider-pagi__elem", function() {
                curSlide = $(this).data("page");
                changeSlides();
            });

        });



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
