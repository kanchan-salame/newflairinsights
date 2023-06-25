@extends('layouts.applayout')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>

<style>
#accordion-style-1 h1,
#accordion-style-1 a {
    color: #172D55;
}

#accordion-style-1 .btn-link {
    font-weight: 400;
    color: #172D55;
    background-color: transparent;
    text-decoration: none !important;
    font-size: 12px;
    font-weight: bold;
    padding-left: 25px;
}

#accordion-style-1 .card-body {
    border-top: 2px solid #172D55;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main {
    display: none;
}
.descImg{
    width: 100%;height: 450px;
}

#accordion-style-1 .card-header .btn .fa.main {
    background: #172D55;
    padding: 13px 11px;
    color: #ffffff;
    width: 35px;
    height: 41px;
    position: absolute;
    left: -1px;
    top: 10px;
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
    display: block;
}

@media (max-width: 575px) {
    /* #hero .hero-img img {*/
    /*    width: 70%;*/
    /*} */
    /*#hero .btn-get-started {*/
    /*    font-size: 16px;*/
    /*    padding: 10px 24px 11px 24px;*/
    /*}*/

    .hero-img img {
        float: none !important;
        margin-left: 90px;
    }
    .descImg{
        width: 100%;height: 300px;
    }

}

@media (min-width:600px) and (max-width:1900px) {
    .nav-tabs .nav-item:nth-child(1) {
        width:25%;
    }
    .nav-tabs .nav-item:nth-child(2) {
        width:25%;
    }
    .nav-tabs .nav-item:nth-child(3) {
        width:20%;
    }
    .nav-tabs .nav-item:nth-child(4) {
        width:30%;
    }
    #blink_btn{
        margin-right:0px;
    }
    .nav-tabs .nav-item{
        text-align:center;
    }
    .descImg{
        width: 100%;height: 450px;
    }
}

.iti__selected-flag {
     padding: 0 !important;
}

</style>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->

<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>-->
<style>
.blink_me {
    animation: blinker 1s linear infinite;
}

@keyframes blinker {

    10% {
        background-color: rgb(0, 0, 255);
    }

    100% {
        background-color: #F37735;
    }
}

.nav-tabs .nav-link {
    border: 1px solid #dee2e6;
    margin-right: 10px;
}

#team {
    /* background: #fff; */
    /* position: fixed; */
    /* top: 0; */
    /* left: 0; */
    /* width: 50%;
    height: 100%; */
    background: -webkit-linear-gradient(top, #0869B1 10%, #fff 10%);
}

#blink_btn {
    background: #F37735;
    color: #fff;
}

#thisButton {
    padding: 8px 20px;
    margin-left: 30px;
    border-radius: 50px;
    color: rgb(0, 0, 0);
    font-size: 14px;
    border: 2px solid #47b2e4;
    font-weight: 600;
}

#thisButton:hover {
    color: #fff;
    background: #31a9e1;
}

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
    height: 150px;
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

#hero111 h1 {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: 700;
    line-height: 25px;
    /* color: #fff; */
}

#hero h1 {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: 700;
    line-height: 25px;
    color: #fff;
}

/* .report-inline {
            color: #fff;
        } */

#hero111 .btn-get-started:hover {
    background: #209dd8;
    text-decoration: none;
}

#hero111 .btn-get-started {
    font-family: "Poppins";
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 28px 11px 28px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px 0 0 0;
    color: #fff;
    background: #47b2e4;
}

@media only screen and (max-width: 370px){
   #hero111 .btn-get-started {
    font-size: 8px;
}
#blink_btn {
    font-size:9px;
}
}
@media only screen and (max-width: 480px){
   #hero111 .btn-get-started {
    font-size: 12px;
}
}

#home h3 {
    font-size: 20px;
    color: #0869B1;
}

thead {
    background: #0869B1;
    color: #fff;
}
@media only screen and (max-width: 880px){
   .nav-tabs .nav-item{
       width:100%;
   }
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
    </div>

</section><!-- End Hero -->
<main id="main">

    <div class="container">

    </div>

    <section id="team" class="team section-bg">
        <div class="container aos-init aos-animate pt-3" data-aos="fade-up" style="background: #fff;">
            <div id="hero111">
                <div class="row mt-5">
                    <div class="col-lg-2 order-1 order-lg-1 hero-img ">
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
                        <div class="justify-content-center justify-content-lg-start mb-5">
                            <a href="tel:+1 830 455 7727" class=" d-block d-sm-inline-block btn-get-started scrollto">
                                <i class="fas fa-phone"></i> Request Expert Call?
                            </a>

                            <a href="{{ route('askForDiscount', $report->slug) }}"
                                class=" d-block d-sm-inline-block btn-get-started scrollto mr-sm-2 ml-sm-2">
                                <i class="fas fa-eye"></i> Ask for Discount
                            </a>

                            <a href="{{ route('rquestSample', $report->slug) }}" class=" d-block d-sm-inline-block btn-get-started scrollto">
                                <i class="fas fa-download"></i> Download Free Sample Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">Description</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Table of Content</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu2">Methodology</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link getstarted blink_me " id="blink_btn"
                                href="{{ route('rquestSample', $report->slug) }}">Need Customization</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            {!! $report->description_one !!}
                            <img src="{{ $report->image_one ? route('home') . '/storage/' . $report->image_one : route('home') . '/assets/img/Darts Market Global Outlook 22.jpg' }}"
                                alt="" class="mb-2 mt-2 descImg">
                            {!! $report->description_two !!}
                            <img src="{{ $report->image_one ? route('home') . '/storage/' . $report->image_one : route('home') . '/assets/img/Darts Market 22 - Copy.jpg' }}"
                                alt="" class="mb-2 mt-2 descImg" >

                            <div class="mt-3">
                                <h3>
                                    <strong>Darts Market Report Coverage</strong>
                                </h3>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ATTRIBUTES</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>STUDY PERIOD</td>
                                            <td>2019-2030</td>
                                        </tr>
                                        <tr>
                                            <td>BASE YEAR</td>
                                            <td>2022</td>
                                        </tr>
                                        <tr>
                                            <td>FORECAST PERIOD</td>
                                            <td>2023-2030</td>
                                        </tr>
                                        <tr>
                                            <td>HISTORICAL PERIOD</td>
                                            <td>2019-2021</td>
                                        </tr>
                                        <tr>
                                            <td>UNIT</td>
                                            <td>VALUE (USD BILLION)</td>
                                        </tr>
                                        <tr>
                                            <td>KEY COMPANIES PROFILED</td>
                                            <td>Viper, Harrows Darts, WINMAU, Arachnid, Bottelsen, CUESOUL, Black Widow,
                                                KO Steel Tip Darts, Carrera, GLD Products.</td>
                                        </tr>
                                        <tr>
                                            <td>SEGMENTS COVERED</td>
                                            <td>By Type - Soft Tip Darts, Steel Tip Darts
                                                By Application - Rice, Beverages
                                                By Geography - North America, Europe, APAC, Middle East Asia & Rest of
                                                World.</td>
                                        </tr>
                                        <tr>
                                            <td>CUSTOMIZATION SCOPE</td>
                                            <td>Get Free Report Customization as per requirements with purchase.
                                                Addition or alteration to Country, Regional & Segment scope.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {!! $report->description_three !!}
                            <img src="{{ $report->image_one ? route('home') . '/storage/' . $report->image_one : route('home') . '/assets/img/Soil Conditioners Market Global Outlook 22.jpg' }}"
                                alt="" class="mb-2 mt-2 descImg">

                            <h3 style="text-align: justify;"><strong>How can this report add value to an
                                    organization?&nbsp;</strong></h3>
                            <br><strong>Product/Innovation Strategy:</strong> The product section will help the reader
                            understand the different solutions for the {{ $report->keywords }}, such as the type of
                            capabilities and
                            emerging technologies. It will also help readers understand the potential of the services at
                            a global level and learn about their progress. The players operating in these markets are
                            developing innovative offerings and are deeply engaged in long-term agreements and contracts
                            with commercial and government agencies. Moreover, the study also examines the investment
                            scenario in the {{ $report->keywords }}.
                            <br><br><strong>Growth/Marketing Strategy:</strong> The players operating in the
                            {{ $report->keywords }} are
                            engaged in several strategies, including strategic partnerships, contracts, agreements, and
                            business expansion. The marketing strategies will help the readers understand the
                            revenue-generating strategies adopted by the in-orbit service providers operating in the
                            {{ $report->keywords }}.
                            <br><br><strong>Competitive Strategy:</strong> The study has analyzed and profiled the key
                            service
                            providers, start-ups, and emerging players in the {{ $report->keywords }}. These companies
                            capture the
                            maximum share in the global {{ $report->keywords }}. Additionally, a detailed competitive
                            benchmarking
                            of the companies and organizations operating in the {{ $report->keywords }} has been
                            carried out, which
                            will help the reader to understand the performance of the players, exhibiting a clear market
                            landscape. In addition to this, comprehensive competitive strategies such as partnerships,
                            agreements, and collaborations will aid the reader in understanding the potential revenue
                            opportunities in the market.
                            <br><br><strong>Market Potential Playbook</strong> - our quantitative and qualitative
                            analysis on
                            Global {{ $report->keywords }} will help you with market sizing and opportunity cost at
                            every segment,
                            global, regional, and segment level


                            <img src="{{ route('home') . '/assets/img/RESEARCH METHODOLOGYresulution walapng .png' }}"
                                alt="" class="mb-2 mt-2" style="width: 100%;">

                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            {!! $report->description_one !!}
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                            <div class="row">
                                {{-- <h3 style="text-align: justify;"><strong>Research Methodology&nbsp;</strong></h3> --}}
                                <div class="col-md-6">
                                    <img src="{{ route('home') . '/assets/img/Research Methodology.png' }}" alt=""
                                        class="mb-2 mt-2" style="width: 100%;height: 300px;">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Flair Insights adopts combination of tools as well as research techniques to
                                        conduct in house research and derive thought provoking business and market
                                        intelligence and produce precise insights for our client partners. Our
                                        consultants and subject matter experts deep dive into market as well as adjacent
                                        product categories to produce best in class market centric reports and offer
                                        realistic revenue recommendations to our clients. To do so, our research
                                        practices is an outcome of in depth as well as end to end methodologies that
                                        cover comprehensive dimension of markets. This includes top-down as well as
                                        bottom-up market approaches that help us to cover different market perspectives.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        Every market and scope associated with it needs to be defined with 360° coverage
                                        in terms of product, application, end use, geography, and other bases. Using our
                                        proprietary research methodology, we employ subject matter experts in every
                                        respective product category in order to define unique market segmentation to
                                        analyze them individually.
                                        Our typical market research process includes secondary research, primary
                                        research, panel discussion and data triangulation, deploying tools-based
                                        forecasting methods, and report authoring.

                                    </p>
                                </div>
                                {{-- <h3 style="text-align: justify;"><strong>Secondary Research&nbsp;</strong></h3> --}}
                                <div class="col-md-6">
                                    <img src="{{ route('home') . '/assets/img/Secondary Research.png' }}" alt=""
                                        class="mb-2 mt-2" style="width: 100%;height: 300px;">

                                </div>
                                <div class="col-md-6">
                                    <p>
                                        We start our market research process with data mining using public sources for
                                        data collection. Sources referred for data collection in secondary research
                                        includes company annual report, news, articles, forums, investor presentation,
                                        product catalogue, forum, press release, technical publication, and other
                                        published material. Flair Insights also have a subscription of private data base
                                        portal such as D&B Hoovers, Factiva, Bloomberg, and others to study data from
                                        private portals. Data collection from secondary research is broadly divided into
                                        three sub-categories such as
                                    </p>

                                </div>
                                <div class="col-md-12">
                                    <ul>
                                        <li>Secondary available sources include company annual reports, press releases,
                                            upcoming expansion and capacity addition plans, news, articles, technical
                                            publication, white papers, product catalogue, and others. </li>
                                        <li>Paid sources include data collection through our paid subscription portals
                                            such as Bloomberg, Factiva, D&B Hoovers, Polymer DataBase, Zoominfo, and
                                            other such data portals. </li>
                                        <li>Association level data include data published by reputed associations,
                                            forums, committee's, and others in that respective industry or product
                                            stream. The other aspect of secondary data includes data extracting through
                                            Flair Insights internal Data Bank which has been maintained from almost past
                                            five-six years.</li>
                                    </ul>
                                    <p>We collect data from these sources and further fine tune at our level to come up
                                        with preliminary research findings. These findings includes market sizing
                                        models, qualitative trends, trade affairs, trend mapping around product and
                                        policy level, and other key aspects of the market. With the help of various
                                        macro and micro economic indicators our consultants strive to examine the market
                                        dynamics and behavior to benefit our client. </p>
                                </div>
                                {{-- <h3 style="text-align: justify;"><strong>Primary Research &nbsp;</strong></h3> --}}
                                <div class="col-md-6">
                                    <img src="{{ route('home') . '/assets/img/Primary Research.png' }}" alt=""
                                        class="mb-2 mt-2" style="width: 100%;height: 300px;">

                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Objective of primary research is to validate preliminary findings prepared
                                        through secondary research at various level. We do this with the help of
                                        extensive expert interviews with wide variety of executives of companies
                                        operating in the respective market, adjacent markets, and parent market &
                                        product categories.
                                    </p>

                                </div>
                                <div class="col-md-12">
                                    <p>
                                        We reach out to CXO’s of companies that includes CEO, CSO, CMO, CFO, Directors,
                                        VP, product managers, operation head, and other departmental heads. Also, to
                                        take a second opinion we discuss our findings with industry leaders, key opinion
                                        leaders, technical consultants, discussion panel heads, and a pool of analysts
                                        from various regions who work with us as data partners.
                                    </p>
                                </div>
                                <h3 style="text-align: justify;"><strong>Data Triangulation, Panel Discussion, and
                                        Forecasting &nbsp;</strong></h3>
                                <div class="col-md-6">
                                    <img src="{{ route('home') . '/assets/img/Data Triangulation, Panel Discussion, & Forecasting.png' }}" alt=""
                                        class="mb-2 mt-2" style="width: 100%;height: 300px;">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Data triangulation is a stage where validated insights from both secondary as
                                        well as primary research steps is being deployed in a technology-based tools and
                                        fine tuned to come with market sizes at various levels. This includes global as
                                        well as country level market estimation, deriving market trends and quantifying
                                        their impact on the market growth and other factors.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        With the help of several permutation and combination as well as statistical
                                        techniques forecast methods is finalized based on the suitability of the market
                                        trajectory. At Flair Insights we conduct a panel discussion which is generally
                                        participated by domain heads, subject matter experts, managers, and advisory
                                        wing heads, to discuss as well finalize the findings of the market study and
                                        final outcome. This is the uniqueness of our research process where we try to
                                        validate the research finding at each and every step of process.
                                    </p>
                                    <p>
                                        Once we are done with global market estimation, we also validate this estimates
                                        with top-down and bottom-up methodologies, where global market size is broken
                                        down into region and county level (Top Down Method); and country level market
                                        are summed up to region and followed by global level (Bottom-up method). Along
                                        with this, market share analysis is also done, where product sale of a
                                        particular company is calculated to know contribution of each company in the
                                        market. So that market size at global, region and country level gets validated.
                                    </p>
                                    <p>
                                        On the other hand, in the forecasting methodologies, we closely monitor macro
                                        and micro economic trends, momentum of technology/market, and development of end
                                        use industries in order to draw precise forecasting methodologies. In the end,
                                        using time series, and other statistical methods the global market size is
                                        forecasted for desired period; and through this precise country level market
                                        trends have been also traced and depicted in the research study in strategic
                                        manner.
                                    </p>
                                </div>
                                <h3 style="text-align: justify;"><strong>Report Authoring &nbsp;</strong></h3>
                                <div class="col-md-6">
                                    <img src="{{ route('home') . '/assets/img/Report Authoring.png' }}" alt=""
                                        class="mb-2 mt-2" style="width: 100%;height: 300px;">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Report authoring is a last stage where our consultant and subject matter experts
                                        collate the entire research findings of study in well presented manner and
                                        compiled in the form of documentation. Report has been authored by technical
                                        consultant as well as analysts in the respective field with the aim to cover
                                        wholistic and technical aspect of the market study at every stage.
                                    </p>
                                </div>
                                <h3 style="text-align: justify;"><strong>End-To-End Research Process
                                        &nbsp;</strong></h3>
                                <div class="col-md-6">
                                    <img src="{{ route('home') . '/assets/img/End-To-End Research Process.png' }}" alt=""
                                        class="mb-2 mt-2" style="width: 100%;height: 300px;">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        We conduct secondary research to collect data to come up with preliminary
                                        research findings through the same. In this practice more than 10 trial and
                                        error approaches have been used so that every possible path of building market
                                        estimation comes into practice. These estimations are discussed with internal
                                        discussion panels heads and managers to come up with rough market sizing. These
                                        estimations further validated in several ways through primary interviews by
                                        having in-depth discussion with industry leaders, decision makers and CXO's in
                                        that particular industry (as mentioned above) using both optimistic and
                                        pessimistic scenarios. This helps us assess the preciseness of every market we
                                        study. Besides this we have our field agent working across the globe that
                                        further helps us give reality check on the information by giving access to the
                                        ground level market trends across several industries.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        Once we done with the market estimation, we also validate this estimates with
                                        top-down and bottom-up methodologies, where global market size is validated into
                                        regional and country level markets (top-Down Approach); and country level
                                        markets are summed up at regional followed by global level (Bottom-Up Approach).
                                        Along with this, market share analysis is also done, wherein product sale of a
                                        particular company is calculated to know the contribution of each company in
                                        that market. So that the market size at global, regional and country level gets
                                        validated.
                                    </p>
                                    <p>
                                        On the other hand, while forecasting the estimation, we closely monitor macro
                                        and micro economic trends, momentum of technology, and development of end use
                                        industries to draw precise forecasting methodologies. In the end, using time
                                        series and other statistical methods, the global market size is forecasted for
                                        the desired period.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion -->
                    <div class="container-fluid bg-gray" id="accordion-style-1">
                        <div class="">
                            <section>
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="mt-4 mb-4"><strong>Frequently Asked Questions</strong></h1>
                                    </div>
                                    <div class="">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fa fa-plus main"></i><i
                                                                class="fa fa-angle-double-right mr-3"></i>What is the
                                                            assessment period of Global {{ $report->keywords }}?
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show fade"
                                                    aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        The assessment period for the Global {{ $report->keywords }} is
                                                        2020-2030. 2020-2021 is considered as a historic period, 2022 is
                                                        base year and 2023-2030 is considered forecast period.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed btn-block text-left"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            <i class="fa fa-plus main"></i><i
                                                                class="fa fa-angle-double-right mr-3"></i>Who are the
                                                            major market players in the Global {{ $report->keywords }}?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Major players operating in the Global {{ $report->keywords }}
                                                        are {{ $report->keyplayers }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed btn-block text-left"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <i class="fa fa-plus main"></i><i
                                                                class="fa fa-angle-double-right mr-3"></i>How can I get
                                                            a sample report/company profiles for the
                                                            {{ $report->keywords }}?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse fade"
                                                    aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        The sample report for the Global {{ $report->keywords }} can be
                                                        obtained on demand from the website. Also, the 24*7 chat support
                                                        & direct call services are provided to procure the sample
                                                        report.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed btn-block text-left"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseFour" aria-expanded="false"
                                                            aria-controls="collapseFour">
                                                            <i class="fa fa-plus main"></i><i
                                                                class="fa fa-angle-double-right mr-3"></i>What segments
                                                            are covered in the Global {{ $report->keywords }}?
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseFour" class="collapse fade"
                                                    aria-labelledby="headingFour" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        The Global {{ $report->keywords }} is segmented into various
                                                        types, applications, end users, technology, region, country, and
                                                        various other segments
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- .// Accordion -->
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sidebar">
                                <div class="options">
                                    <h6>Pricing & Purchase Option</h6>
                                    <button class="btn btn-success">
                                        <a href="{{ route('buyNowPage', $report->slug) }}">Proceed to buy</a>
                                    </button>
                                </div>
                            </div>
                            <br>
                            <div class="speak-to-analyst d-flex p-2">
                                <img src="{{ route('home') }}/assets/img/hero-img.png" class="" alt="">
                                <p class="text-justify">Speak with an analyst to get exclusive insights tailored to your needs</p>
                            </div>
                            <br>
                            <div class="request-additional text-center">
                                <h6>Customize this report to meet your specific needs </h6>
                                <a href="{{ route('rquestSample', $report->slug) }}" class="btn btn-success">Click here</a>
                            </div>
                            <br>
                            <div class="why-us text-left">
                                <div class="options" style="
                                    text-align: left;
                                ">
                                    <h6>Reasons to Select Us</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span class="icon-style">
                                                <i class="fas fa-wallet"></i>
                                            </span>
                                        </div>
                                        <div class="col-md-9">
                                            <h5>Secure Purchase</h5>
                                            <p>Our Report Comes with a Service Guarantee. We are Committed to Upholding the Quality of Our Report.</p>
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
                                            <p>We prioritize confidentiality by taking extensive measures to safeguard information and ensure its strict privacy.</p>
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
                                            <p>Compliant with GDPR & CCPA regulations, we maintain strict confidentiality for all interactions.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <span class="icon-style">
                                                <i class="fas fa-phone-alt"></i>
                                            </span>
                                        </div>
                                        <div class="col-md-9">
                                            <h5>24/6 Research Support</h5>
                                            <p> Resolve Your Queries with an Industry Expert's Insightful Assistance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class=" contact side-contact-us" id="contact">
                                <div class="options">
                                    <h6>Dowload Free Sample Report</h6>
                                    <div class="row px-2">
                                       <form action="{{route('ReportRequest.store')}}" method="post" role="form" class=" mt-2">
                        @csrf

                        <div class="form-group d-none">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="report_id">Report ID:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <input type="text" class="form-control" id="report_id" name="report_id"
                                        value="{{ $report->id}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-none">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="subject">Subject:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        value="Request Sample Report">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="fname">Full Name:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter Name"
                                        name="fname" value="{{ old('fname') }}">
                                    <span style="color:red">@error('fname'){{$message}}@enderror</span>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="email">Email:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email" value="{{ old('fname') }}">
                                    <span style="color:red">@error('email'){{$message}}@enderror</span>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label class="form-label">Phone Number:<span class="text-danger">*</span></label>-->
                                <!--</div>-->
                                <div class="col">
                                    <div class="form-control">
                                        <input class=" border-0" name="contact_no" id="phone" style="outline:none" type="tel" value="{{ old('contact_no') }}">
                                        <span id="valid-msg" class="hide"></span>
                                        <span id="error-msg" class="hide"></span>
                                        <span style="color:red">@error('contact_no'){{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="company_name">Name of Company:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <input type="text" class="form-control" id="company_name"
                                        placeholder="Enter Company Name" name="company_name"
                                        value="{{ old('company_name') }}">
                                    <span style="color:red">@error('company_name'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="designation">Designation:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <input type="text" class="form-control" id="designation"
                                        placeholder="Enter designation" name="designation"
                                        value="{{ old('designation') }}">
                                    <span style="color:red">@error('designation'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="country">Country:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <select value="{{ old('country') }}" class="countrySelect form-control form-control"
                                        id="country" name="country" title="Country">
                                        <option value="0" class="text-secondary text-secondary">Select Country</option>
                                        <option value="af" @if(old('country')=='af' ) selected @endif
                                            data-country-name="Afghanistan " data-dial-code="93">
                                            Afghanistan
                                        </option>
                                        <option value="al" @if(old('country')=='al' ) selected @endif
                                            data-country-name="Albania " data-dial-code="355">Albania
                                        </option>
                                        <option value="dz" @if(old('country')=='dz' ) selected @endif
                                            data-country-name="Algeria " data-dial-code="213">Algeria
                                        </option>
                                        <option value="as" @if(old('country')=='as' ) selected @endif
                                            data-country-name="American Samoa" data-dial-code="1684">
                                            American
                                            Samoa</option>
                                        <option value="ad" @if(old('country')=='ad' ) selected @endif
                                            data-country-name="Andorra" data-dial-code="376">Andorra
                                        </option>
                                        <option value="ao" @if(old('country')=='ao' ) selected @endif
                                            data-country-name="Angola" data-dial-code="244">Angola
                                        </option>
                                        <option value="ai" @if(old('country')=='ai' ) selected @endif
                                            data-country-name="Anguilla" data-dial-code="1264">Anguilla
                                        </option>
                                        <option value="ag" @if(old('country')=='ag' ) selected @endif
                                            data-country-name="Antigua and Barbuda" data-dial-code="1268">
                                            Antigua and Barbuda</option>
                                        <option value="ar" @if(old('country')=='ar' ) selected @endif
                                            data-country-name="Argentina" data-dial-code="54">Argentina
                                        </option>
                                        <option value="am" @if(old('country')=='am' ) selected @endif
                                            data-country-name="Armenia " data-dial-code="374">Armenia
                                        </option>
                                        <option value="aw" @if(old('country')=='aw' ) selected @endif
                                            data-country-name="Aruba" data-dial-code="297">Aruba</option>
                                        <option value="au" @if(old('country')=='au' ) selected @endif
                                            data-country-name="Australia" data-dial-code="61">Australia
                                        </option>
                                        <option value="at" @if(old('country')=='at' ) selected @endif
                                            data-country-name="Austria " data-dial-code="43">Austria
                                        </option>
                                        <option value="az" @if(old('country')=='az' ) selected @endif
                                            data-country-name="Azerbaijan " data-dial-code="994">
                                            Azerbaijan </option>
                                        <option value="bs" @if(old('country')=='bs' ) selected @endif
                                            data-country-name="Bahamas" data-dial-code="1242">Bahamas
                                        </option>
                                        <option value="bh" @if(old('country')=='bh' ) selected @endif
                                            data-country-name="Bahrain " data-dial-code="973">Bahrain
                                        </option>
                                        <option value="bd" @if(old('country')=='bd' ) selected @endif
                                            data-country-name="Bangladesh " data-dial-code="880">
                                            Bangladesh </option>
                                        <option value="bb" @if(old('country')=='bb' ) selected @endif
                                            data-country-name="Barbados" data-dial-code="1246">Barbados
                                        </option>
                                        <option value="by" @if(old('country')=='by' ) selected @endif
                                            data-country-name="Belarus " data-dial-code="375">Belarus
                                        </option>
                                        <option value="be" @if(old('country')=='be' ) selected @endif
                                            data-country-name="Belgium " data-dial-code="32">Belgium
                                        </option>
                                        <option value="bz" @if(old('country')=='bz' ) selected @endif
                                            data-country-name="Belize" data-dial-code="501">Belize
                                        </option>
                                        <option value="bj" @if(old('country')=='bj' ) selected @endif
                                            data-country-name="Benin " data-dial-code="229">Benin
                                        </option>
                                        <option value="bm" @if(old('country')=='bm' ) selected @endif
                                            data-country-name="Bermuda" data-dial-code="1441">Bermuda
                                        </option>
                                        <option value="bt" @if(old('country')=='bt' ) selected @endif
                                            data-country-name="Bhutan " data-dial-code="975">Bhutan
                                        </option>
                                        <option value="bo" @if(old('country')=='bo' ) selected @endif
                                            data-country-name="Bolivia" data-dial-code="591">Bolivia
                                        </option>
                                        <option value="ba" @if(old('country')=='ba' ) selected @endif
                                            data-country-name="Bosnia and Herzegovina " data-dial-code="387">
                                            Bosnia and Herzegovina </option>
                                        <option value="bw" @if(old('country')=='bw' ) selected @endif
                                            data-country-name="Botswana" data-dial-code="267">Botswana
                                        </option>
                                        <option value="br" @if(old('country')=='br' ) selected @endif
                                            data-country-name="Brazil " data-dial-code="55">Brazil
                                        </option>
                                        <option value="io" @if(old('country')=='io' ) selected @endif
                                            data-country-name="British Indian Ocean Territory" data-dial-code="246">
                                            British Indian Ocean Territory</option>
                                        <option value="vg" @if(old('country')=='vg' ) selected @endif
                                            data-country-name="British Virgin Islands" data-dial-code="1284">
                                            British Virgin Islands</option>
                                        <option value="bn" @if(old('country')=='bn' ) selected @endif
                                            data-country-name="Brunei" data-dial-code="673">Brunei
                                        </option>
                                        <option value="bg" @if(old('country')=='bg' ) selected @endif
                                            data-country-name="Bulgaria " data-dial-code="359">Bulgaria
                                        </option>
                                        <option value="bf" @if(old('country')=='bf' ) selected @endif
                                            data-country-name="Burkina Faso" data-dial-code="226">Burkina
                                            Faso</option>
                                        <option value="bi" @if(old('country')=='bi' ) selected @endif
                                            data-country-name="Burundi " data-dial-code="257">Burundi
                                        </option>
                                        <option value="kh" @if(old('country')=='kh' ) selected @endif
                                            data-country-name="Cambodia " data-dial-code="855">Cambodia
                                        </option>
                                        <option value="cm" @if(old('country')=='cm' ) selected @endif
                                            data-country-name="Cameroon " data-dial-code="237">Cameroon
                                        </option>
                                        <option value="ca" @if(old('country')=='ca' ) selected @endif
                                            data-country-name="Canada" data-dial-code="1">Canada</option>
                                        <option value="cv" @if(old('country')=='cv' ) selected @endif
                                            data-country-name="Cape Verde " data-dial-code="238">Cape
                                            Verde </option>
                                        <option value="bq" @if(old('country')=='bq' ) selected @endif
                                            data-country-name="Caribbean Netherlands" data-dial-code="599">
                                            Caribbean Netherlands</option>
                                        <option value="ky" @if(old('country')=='ky' ) selected @endif
                                            data-country-name="Cayman Islands" data-dial-code="1345">
                                            Cayman Islands</option>
                                        <option value="cf" @if(old('country')=='cf' ) selected @endif
                                            data-country-name="Central African Republic " data-dial-code="236">
                                            Central African Republic </option>
                                        <option value="td" @if(old('country')=='td' ) selected @endif
                                            data-country-name="Chad " data-dial-code="235">Chad </option>
                                        <option value="cl" @if(old('country')=='cl' ) selected @endif
                                            data-country-name="Chile" data-dial-code="56">Chile</option>
                                        <option value="cn" @if(old('country')=='cn' ) selected @endif
                                            data-country-name="China " data-dial-code="86">China
                                        </option>
                                        <option value="cx" @if(old('country')=='cx' ) selected @endif
                                            data-country-name="Christmas Island" data-dial-code="61">
                                            Christmas Island</option>
                                        <option value="cc" @if(old('country')=='cc' ) selected @endif
                                            data-country-name="Cocos " data-dial-code="61">Cocos
                                        </option>
                                        <option value="co" @if(old('country')=='co' ) selected @endif
                                            data-country-name="Colombia" data-dial-code="57">Colombia
                                        </option>
                                        <option value="km" @if(old('country')=='km' ) selected @endif
                                            data-country-name="Comoros " data-dial-code="269">Comoros
                                        </option>
                                        <option value="cd" @if(old('country')=='cd' ) selected @endif
                                            data-country-name="Congo " data-dial-code="243">Congo
                                        </option>
                                        <option value="cg" @if(old('country')=='cg' ) selected @endif
                                            data-country-name="Congo " data-dial-code="242">Congo
                                        </option>
                                        <option value="ck" @if(old('country')=='ck' ) selected @endif
                                            data-country-name="Cook Islands" data-dial-code="682">Cook
                                            Islands</option>
                                        <option value="cr" data-country-name="Costa Rica" data-dial-code="506">Costa
                                            Rica
                                        </option>
                                        <option value="ci" @if(old('country')=='ci' ) selected @endif
                                            data-country-name="Côte d’Ivoire" data-dial-code="225">Côte
                                            d’Ivoire</option>
                                        <option value="hr" @if(old('country')=='hr' ) selected @endif
                                            data-country-name="Croatia " data-dial-code="385">Croatia
                                        </option>
                                        <option value="cu" @if(old('country')=='cu' ) selected @endif
                                            data-country-name="Cuba" data-dial-code="53">Cuba</option>
                                        <option value="cw" @if(old('country')=='cw' ) selected @endif
                                            data-country-name="Curaçao" data-dial-code="599">Curaçao
                                        </option>
                                        <option value="cy" @if(old('country')=='cy' ) selected @endif
                                            data-country-name="Cyprus " data-dial-code="357">Cyprus
                                        </option>
                                        <option value="cz" @if(old('country')=='cz' ) selected @endif
                                            data-country-name="Czech Republic " data-dial-code="420">
                                            Czech
                                            Republic </option>
                                        <option value="dk" @if(old('country')=='dk' ) selected @endif
                                            data-country-name="Denmark " data-dial-code="45">Denmark
                                        </option>
                                        <option value="dj" @if(old('country')=='dj' ) selected @endif
                                            data-country-name="Djibouti" data-dial-code="253">Djibouti
                                        </option>
                                        <option value="dm" @if(old('country')=='dm' ) selected @endif
                                            data-country-name="Dominica" data-dial-code="1767">Dominica
                                        </option>
                                        <option value="do" @if(old('country')=='do' ) selected @endif
                                            data-country-name="Dominican Republic " data-dial-code="1">
                                            Dominican Republic </option>
                                        <option value="ec" @if(old('country')=='ec' ) selected @endif
                                            data-country-name="Ecuador" data-dial-code="593">Ecuador
                                        </option>
                                        <option value="eg" @if(old('country')=='eg' ) selected @endif
                                            data-country-name="Egypt " data-dial-code="20">Egypt
                                        </option>
                                        <option value="sv" @if(old('country')=='sv' ) selected @endif
                                            data-country-name="El Salvador" data-dial-code="503">El
                                            Salvador</option>
                                        <option value="gq" @if(old('country')=='gq' ) selected @endif
                                            data-country-name="Equatorial Guinea " data-dial-code="240">
                                            Equatorial Guinea </option>
                                        <option value="er" @if(old('country')=='er' ) selected @endif
                                            data-country-name="Eritrea" data-dial-code="291">Eritrea
                                        </option>
                                        <option value="ee" @if(old('country')=='ee' ) selected @endif
                                            data-country-name="Estonia " data-dial-code="372">Estonia
                                        </option>
                                        <option value="et" @if(old('country')=='et' ) selected @endif
                                            data-country-name="Ethiopia" data-dial-code="251">Ethiopia
                                        </option>
                                        <option value="fk" @if(old('country')=='fk' ) selected @endif
                                            data-country-name="Falkland Islands " data-dial-code="500">
                                            Falkland Islands </option>
                                        <option value="fo" @if(old('country')=='fo' ) selected @endif
                                            data-country-name="Faroe Islands " data-dial-code="298">Faroe
                                            Islands </option>
                                        <option value="fj" @if(old('country')=='fj' ) selected @endif
                                            data-country-name="Fiji" data-dial-code="679">Fiji</option>
                                        <option value="fi" @if(old('country')=='fi' ) selected @endif
                                            data-country-name="Finland " data-dial-code="358">Finland
                                        </option>
                                        <option value="fr" @if(old('country')=='fr' ) selected @endif
                                            data-country-name="France" data-dial-code="33">France
                                        </option>
                                        <option value="gf" @if(old('country')=='gf' ) selected @endif
                                            data-country-name="French Guiana " data-dial-code="594">
                                            French
                                            Guiana </option>
                                        <option value="pf" @if(old('country')=='pf' ) selected @endif
                                            data-country-name="French Polynesia " data-dial-code="689">
                                            French Polynesia </option>
                                        <option value="ga" @if(old('country')=='ga' ) selected @endif
                                            data-country-name="Gabon" data-dial-code="241">Gabon</option>
                                        <option value="gm" @if(old('country')=='gm' ) selected @endif
                                            data-country-name="Gambia" data-dial-code="220">Gambia
                                        </option>
                                        <option value="ge" @if(old('country')=='ge' ) selected @endif
                                            data-country-name="Georgia " data-dial-code="995">Georgia
                                        </option>
                                        <option value="de" @if(old('country')=='de' ) selected @endif
                                            data-country-name="Germany " data-dial-code="49">Germany
                                        </option>
                                        <option value="gh" @if(old('country')=='gh' ) selected @endif
                                            data-country-name="Ghana " data-dial-code="233">Ghana
                                        </option>
                                        <option value="gi" @if(old('country')=='gi' ) selected @endif
                                            data-country-name="Gibraltar" data-dial-code="350">Gibraltar
                                        </option>
                                        <option value="gr" @if(old('country')=='gr' ) selected @endif
                                            data-country-name="Greece " data-dial-code="30">Greece
                                        </option>
                                        <option value="gl" @if(old('country')=='gl' ) selected @endif
                                            data-country-name="Greenland " data-dial-code="299">Greenland
                                        </option>
                                        <option value="gd" @if(old('country')=='gd' ) selected @endif
                                            data-country-name="Grenada" data-dial-code="1473">Grenada
                                        </option>
                                        <option value="gp" @if(old('country')=='gp' ) selected @endif
                                            data-country-name="Guadeloupe" data-dial-code="590">
                                            Guadeloupe
                                        </option>
                                        <option value="gu" @if(old('country')=='gu' ) selected @endif
                                            data-country-name="Guam" data-dial-code="1671">Guam</option>
                                        <option value="gt" @if(old('country')=='gt' ) selected @endif
                                            data-country-name="Guatemala" data-dial-code="502">Guatemala
                                        </option>
                                        <option value="gg" @if(old('country')=='gg' ) selected @endif
                                            data-country-name="Guernsey" data-dial-code="44">Guernsey
                                        </option>
                                        <option value="gn" @if(old('country')=='gn' ) selected @endif
                                            data-country-name="Guinea " data-dial-code="224">Guinea
                                        </option>
                                        <option value="gw" @if(old('country')=='gw' ) selected @endif
                                            data-country-name="Guinea-Bissau " data-dial-code="245">
                                            Guinea-Bissau </option>
                                        <option value="gy" @if(old('country')=='gw' ) selected @endif
                                            data-country-name="Guyana" data-dial-code="592">Guyana
                                        </option>
                                        <option value="ht" @if(old('country')=='ht' ) selected @endif
                                            data-country-name="Haiti" data-dial-code="509">Haiti</option>
                                        <option value="hn" @if(old('country')=='hn' ) selected @endif
                                            data-country-name="Honduras" data-dial-code="504">Honduras
                                        </option>
                                        <option value="hk" @if(old('country')=='hk' ) selected @endif
                                            data-country-name="Hong Kong " data-dial-code="852">Hong Kong
                                        </option>
                                        <option value="hu" @if(old('country')=='hu' ) selected @endif
                                            data-country-name="Hungary " data-dial-code="36">Hungary
                                        </option>
                                        <option value="is" @if(old('country')=='is' ) selected @endif
                                            data-country-name="Iceland " data-dial-code="354">Iceland
                                        </option>
                                        <option value="in" @if(old('country')=='in' ) selected @endif
                                            data-country-name="India " data-dial-code="91">India
                                        </option>
                                        <option value="id" @if(old('country')=='id' ) selected @endif
                                            data-country-name="Indonesia" data-dial-code="62">Indonesia
                                        </option>
                                        <option value="ir" @if(old('country')=='ir' ) selected @endif
                                            data-country-name="Iran " data-dial-code="98">Iran </option>
                                        <option value="iq" @if(old('country')=='iq' ) selected @endif
                                            data-country-name="Iraq " data-dial-code="964">Iraq </option>
                                        <option value="ie" @if(old('country')=='ie' ) selected @endif
                                            data-country-name="Ireland" data-dial-code="353">Ireland
                                        </option>
                                        <option value="im" @if(old('country')=='im' ) selected @endif
                                            data-country-name="Isle of Man" data-dial-code="44">Isle of
                                            Man</option>
                                        <option value="il" @if(old('country')=='il' ) selected @endif
                                            data-country-name="Israel " data-dial-code="972">Israel
                                        </option>
                                        <option value="it" @if(old('country')=='it' ) selected @endif
                                            data-country-name="Italy " data-dial-code="39">Italy
                                        </option>
                                        <option value="jm" @if(old('country')=='jm' ) selected @endif
                                            data-country-name="Jamaica" data-dial-code="1876">Jamaica
                                        </option>
                                        <option value="jp" @if(old('country')=='jp' ) selected @endif
                                            data-country-name="Japan " data-dial-code="81">Japan
                                        </option>
                                        <option value="je" @if(old('country')=='je' ) selected @endif
                                            data-country-name="Jersey" data-dial-code="44">Jersey
                                        </option>
                                        <option value="jo" @if(old('country')=='jo' ) selected @endif
                                            data-country-name="Jordan " data-dial-code="962">Jordan
                                        </option>
                                        <option value="kz" @if(old('country')=='kz' ) selected @endif
                                            data-country-name="Kazakhstan " data-dial-code="7">Kazakhstan
                                        </option>
                                        <option value="ke" @if(old('country')=='ke' ) selected @endif
                                            data-country-name="Kenya" data-dial-code="254">Kenya</option>
                                        <option value="ki" @if(old('country')=='ki ' ) selected @endif
                                            data-country-name="Kiribati" data-dial-code="686">Kiribati
                                        </option>
                                        <option value="kw" @if(old('country')=='kw' ) selected @endif
                                            data-country-name="Kuwait " data-dial-code="965">Kuwait
                                        </option>
                                        <option value="kg" @if(old('country')=='kg' ) selected @endif
                                            data-country-name="Kyrgyzstan " data-dial-code="996">
                                            Kyrgyzstan </option>
                                        <option value="la" @if(old('country')=='la' ) selected @endif
                                            data-country-name="Laos " data-dial-code="856">Laos </option>
                                        <option value="lv" @if(old('country')=='lv' ) selected @endif
                                            data-country-name="Latvia " data-dial-code="371">Latvia
                                        </option>
                                        <option value="lb" @if(old('country')=='lb' ) selected @endif
                                            data-country-name="Lebanon " data-dial-code="961">Lebanon
                                        </option>
                                        <option value="ls" @if(old('country')=='ls' ) selected @endif
                                            data-country-name="Lesotho" data-dial-code="266">Lesotho
                                        </option>
                                        <option value="lr" @if(old('country')=='lr' ) selected @endif
                                            data-country-name="Liberia" data-dial-code="231">Liberia
                                        </option>
                                        <option value="ly" @if(old('country')=='ly' ) selected @endif
                                            data-country-name="Libya " data-dial-code="218">Libya
                                        </option>
                                        <option value="li" @if(old('country')=='li' ) selected @endif
                                            data-country-name="Liechtenstein" data-dial-code="423">
                                            Liechtenstein</option>
                                        <option value="lt" @if(old('country')=='lt' ) selected @endif
                                            data-country-name="Lithuania " data-dial-code="370">Lithuania
                                        </option>
                                        <option value="lu" @if(old('country')=='lu' ) selected @endif
                                            data-country-name="Luxembourg" data-dial-code="352">
                                            Luxembourg
                                        </option>
                                        <option value="mo" @if(old('country')=='mo' ) selected @endif
                                            data-country-name="Macau " data-dial-code="853">Macau
                                        </option>
                                        <option value="mk" @if(old('country')=='mk' ) selected @endif
                                            data-country-name="Macedonia " data-dial-code="389">Macedonia
                                        </option>
                                        <option value="mg" @if(old('country')=='mg' ) selected @endif
                                            data-country-name="Madagascar " data-dial-code="261">
                                            Madagascar </option>
                                        <option value="mw" @if(old('country')=='mw' ) selected @endif
                                            data-country-name="Malawi" data-dial-code="265">Malawi
                                        </option>
                                        <option value="my" @if(old('country')=='my' ) selected @endif
                                            data-country-name="Malaysia" data-dial-code="60">Malaysia
                                        </option>
                                        <option value="mv" @if(old('country')=='mv' ) selected @endif
                                            data-country-name="Maldives" data-dial-code="960">Maldives
                                        </option>
                                        <option value="ml" @if(old('country')=='ml' ) selected @endif
                                            data-country-name="Mali" data-dial-code="223">Mali</option>
                                        <option value="mt" @if(old('country')=='mt' ) selected @endif
                                            data-country-name="Malta" data-dial-code="356">Malta</option>
                                        <option value="mh" @if(old('country')=='mh' ) selected @endif
                                            data-country-name="Marshall Islands" data-dial-code="692">
                                            Marshall Islands</option>
                                        <option value="mq" @if(old('country')=='mq' ) selected @endif
                                            data-country-name="Martinique" data-dial-code="596">
                                            Martinique
                                        </option>
                                        <option value="mr" @if(old('country')=='mr' ) selected @endif
                                            data-country-name="Mauritania " data-dial-code="222">
                                            Mauritania </option>
                                        <option value="mu" @if(old('country')=='mu' ) selected @endif
                                            data-country-name="Mauritius " data-dial-code="230">Mauritius
                                        </option>
                                        <option value="yt" @if(old('country')=='yt' ) selected @endif
                                            data-country-name="Mayotte" data-dial-code="262">Mayotte
                                        </option>
                                        <option value="mx" @if(old('country')=='mx' ) selected @endif
                                            data-country-name="Mexico " data-dial-code="52">Mexico
                                        </option>
                                        <option value="fm" @if(old('country')=='fm' ) selected @endif
                                            data-country-name="Micronesia" data-dial-code="691">
                                            Micronesia
                                        </option>
                                        <option value="md" @if(old('country')=='md' ) selected @endif
                                            data-country-name="Moldova " data-dial-code="373">Moldova
                                        </option>
                                        <option value="mc" @if(old('country')=='mc' ) selected @endif
                                            data-country-name="Monaco" data-dial-code="377">Monaco
                                        </option>
                                        <option value="mn" @if(old('country')=='mn' ) selected @endif
                                            data-country-name="Mongolia " data-dial-code="976">Mongolia
                                        </option>
                                        <option value="me" @if(old('country')=='me' ) selected @endif
                                            data-country-name="Montenegro " data-dial-code="382">
                                            Montenegro </option>
                                        <option value="ms" @if(old('country')=='ms' ) selected @endif
                                            data-country-name="Montserrat" data-dial-code="1664">
                                            Montserrat</option>
                                        <option value="ma" @if(old('country')=='ma' ) selected @endif
                                            data-country-name="Morocco " data-dial-code="212">Morocco
                                        </option>
                                        <option value="mz" @if(old('country')=='mz' ) selected @endif
                                            data-country-name="Mozambique " data-dial-code="258">
                                            Mozambique </option>
                                        <option value="mm" @if(old('country')=='mm' ) selected @endif
                                            data-country-name="Myanmar " data-dial-code="95">Myanmar
                                        </option>
                                        <option value="na" @if(old('country')=='na' ) selected @endif
                                            data-country-name="Namibia " data-dial-code="264">Namibia
                                        </option>
                                        <option value="nr" @if(old('country')=='nr' ) selected @endif
                                            data-country-name="Nauru" data-dial-code="674">Nauru</option>
                                        <option value="np" @if(old('country')=='np' ) selected @endif
                                            data-country-name="Nepal " data-dial-code="977">Nepal
                                        </option>
                                        <option value="nl" @if(old('country')=='nl' ) selected @endif
                                            data-country-name="Netherlands " data-dial-code="31">
                                            Netherlands </option>
                                        <option value="nc" @if(old('country')=='nc' ) selected @endif
                                            data-country-name="New Caledonia " data-dial-code="687">New
                                            Caledonia </option>
                                        <option value="nz" @if(old('country')=='nz' ) selected @endif
                                            data-country-name="New Zealand" data-dial-code="64">New
                                            Zealand</option>
                                        <option value="ni" @if(old('country')=='ni' ) selected @endif
                                            data-country-name="Nicaragua" data-dial-code="505">Nicaragua
                                        </option>
                                        <option value="ne" @if(old('country')=='ne' ) selected @endif
                                            data-country-name="Niger " data-dial-code="227">Niger
                                        </option>
                                        <option value="ng" @if(old('country')=='ng' ) selected @endif
                                            data-country-name="Nigeria" data-dial-code="234">Nigeria
                                        </option>
                                        <option value="nu" @if(old('country')=='nu' ) selected @endif
                                            data-country-name="Niue" data-dial-code="683">Niue</option>
                                        <option value="nf" @if(old('country')=='nf' ) selected @endif
                                            data-country-name="Norfolk Island" data-dial-code="672">
                                            Norfolk Island</option>
                                        <option value="kp" @if(old('country')=='kp' ) selected @endif
                                            data-country-name="North Korea " data-dial-code="850">North
                                            Korea </option>
                                        <option value="mp" @if(old('country')=='mp' ) selected @endif
                                            data-country-name="Northern Mariana Islands" data-dial-code="1670">
                                            Northern Mariana Islands</option>
                                        <option value="no" @if(old('country')=='no' ) selected @endif
                                            data-country-name="Norway " data-dial-code="47">Norway
                                        </option>
                                        <option value="om" @if(old('country')=='om' ) selected @endif
                                            data-country-name="Oman " data-dial-code="968">Oman </option>
                                        <option value="pk" @if(old('country')=='pk' ) selected @endif
                                            data-country-name="Pakistan " data-dial-code="92">Pakistan
                                        </option>
                                        <option value="pw" @if(old('country')=='pw' ) selected @endif
                                            data-country-name="Palau" data-dial-code="680">Palau</option>
                                        <option value="ps" @if(old('country')=='ps' ) selected @endif
                                            data-country-name="Palestine " data-dial-code="970">Palestine
                                        </option>
                                        <option value="pa" @if(old('country')=='pa' ) selected @endif
                                            data-country-name="Panama " data-dial-code="507">Panama
                                        </option>
                                        <option value="pg" @if(old('country')=='pg' ) selected @endif
                                            data-country-name="Papua New Guinea" data-dial-code="675">
                                            Papua New Guinea</option>
                                        <option value="py" @if(old('country')=='py' ) selected @endif
                                            data-country-name="Paraguay" data-dial-code="595">Paraguay
                                        </option>
                                        <option value="pe" @if(old('country')=='pe' ) selected @endif
                                            data-country-name="Peru " data-dial-code="51">Peru </option>
                                        <option value="ph" @if(old('country')=='ph' ) selected @endif
                                            data-country-name="Philippines" data-dial-code="63">
                                            Philippines</option>
                                        <option value="pl" @if(old('country')=='pl' ) selected @endif
                                            data-country-name="Poland " data-dial-code="48">Poland
                                        </option>
                                        <option value="pt" @if(old('country')=='pt' ) selected @endif
                                            data-country-name="Portugal" data-dial-code="351">Portugal
                                        </option>
                                        <option value="pr" @if(old('country')=='pr' ) selected @endif
                                            data-country-name="Puerto Rico" data-dial-code="1">Puerto
                                            Rico
                                        </option>
                                        <option value="qa" @if(old('country')=='qa' ) selected @endif
                                            data-country-name="Qatar " data-dial-code="974">Qatar
                                        </option>
                                        <option value="re" @if(old('country')=='re' ) selected @endif
                                            data-country-name="Réunion " data-dial-code="262">Réunion
                                        </option>
                                        <option value="ro" @if(old('country')=='ro' ) selected @endif
                                            data-country-name="Romania " data-dial-code="40">Romania
                                        </option>
                                        <option value="ru" @if(old('country')=='ru' ) selected @endif
                                            data-country-name="Russia " data-dial-code="7">Russia
                                        </option>
                                        <option value="rw" @if(old('country')=='rw' ) selected @endif
                                            data-country-name="Rwanda" data-dial-code="250">Rwanda
                                        </option>
                                        <option value="bl" @if(old('country')=='bl' ) selected @endif
                                            data-country-name="Saint Barthélemy " data-dial-code="590">
                                            Saint Barthélemy </option>
                                        <option value="sh" @if(old('country')=='sh' ) selected @endif
                                            data-country-name="Saint Helena" data-dial-code="290">Saint
                                            Helena</option>
                                        <option value="kn" @if(old('country')=='kn' ) selected @endif
                                            data-country-name="Saint Kitts and Nevis" data-dial-code="1869">
                                            Saint
                                            Kitts and Nevis</option>
                                        <option value="lc" @if(old('country')=='lc' ) selected @endif
                                            data-country-name="Saint Lucia" data-dial-code="1758">Saint
                                            Lucia</option>
                                        <option value="mf" @if(old('country')=='mf' ) selected @endif
                                            data-country-name="Saint Martin " data-dial-code="590">Saint
                                            Martin </option>
                                        <option value="pm" @if(old('country')=='pm' ) selected @endif
                                            data-country-name="Saint Pierre and Miquelon " data-dial-code="508">
                                            Saint Pierre and Miquelon </option>
                                        <option value="vc" @if(old('country')=='vc' ) selected @endif
                                            data-country-name="Saint Vincent and the Grenadines" data-dial-code="1784">
                                            Saint Vincent and the Grenadines</option>
                                        <option value="ws" @if(old('country')=='ws' ) selected @endif
                                            data-country-name="Samoa" data-dial-code="685">Samoa</option>
                                        <option value="sm" @if(old('country')=='sm' ) selected @endif
                                            data-country-name="San Marino" data-dial-code="378">San
                                            Marino
                                        </option>
                                        <option value="st" @if(old('country')=='st' ) selected @endif
                                            data-country-name="São Tomé and Príncipe " data-dial-code="239">
                                            São
                                            Tomé and Príncipe </option>
                                        <option value="sa" @if(old('country')=='sa' ) selected @endif
                                            data-country-name="Saudi Arabia " data-dial-code="966">Saudi
                                            Arabia </option>
                                        <option value="sn" @if(old('country')=='sn' ) selected @endif
                                            data-country-name="Senegal " data-dial-code="221">Senegal
                                        </option>
                                        <option value="rs" @if(old('country')=='rs' ) selected @endif
                                            data-country-name="Serbia " data-dial-code="381">Serbia
                                        </option>
                                        <option value="sc" @if(old('country')=='sc' ) selected @endif
                                            data-country-name="Seychelles" data-dial-code="248">
                                            Seychelles
                                        </option>
                                        <option value="sl" @if(old('country')=='sl' ) selected @endif
                                            data-country-name="Sierra Leone" data-dial-code="232">Sierra
                                            Leone</option>
                                        <option value="sg" @if(old('country')=='sg' ) selected @endif
                                            data-country-name="Singapore" data-dial-code="65">Singapore
                                        </option>
                                        <option value="sx" @if(old('country')=='sx' ) selected @endif
                                            data-country-name="Sint Maarten" data-dial-code="1721">Sint
                                            Maarten</option>
                                        <option value="sk" @if(old('country')=='sk' ) selected @endif
                                            data-country-name="Slovakia " data-dial-code="421">Slovakia
                                        </option>
                                        <option value="si" @if(old('country')=='si' ) selected @endif
                                            data-country-name="Slovenia " data-dial-code="386">Slovenia
                                        </option>
                                        <option value="sb" @if(old('country')=='sb' ) selected @endif
                                            data-country-name="Solomon Islands" data-dial-code="677">
                                            Solomon Islands</option>
                                        <option value="so" @if(old('country')=='so' ) selected @endif
                                            data-country-name="Somalia " data-dial-code="252">Somalia
                                        </option>
                                        <option value="za" @if(old('country')=='za' ) selected @endif
                                            data-country-name="South Africa" data-dial-code="27">South
                                            Africa</option>
                                        <option value="kr" @if(old('country')=='kr' ) selected @endif
                                            data-country-name="South Korea " data-dial-code="82">South
                                            Korea </option>
                                        <option value="ss" @if(old('country')=='ss' ) selected @endif
                                            data-country-name="South Sudan " data-dial-code="211">South
                                            Sudan </option>
                                        <option value="es" @if(old('country')=='es' ) selected @endif
                                            data-country-name="Spain " data-dial-code="34">Spain
                                        </option>
                                        <option value="lk" @if(old('country')=='lk' ) selected @endif
                                            data-country-name="Sri Lanka " data-dial-code="94">Sri Lanka
                                        </option>
                                        <option value="sd" @if(old('country')=='sd' ) selected @endif
                                            data-country-name="Sudan " data-dial-code="249">Sudan
                                        </option>
                                        <option value="sr" @if(old('country')=='sr' ) selected @endif
                                            data-country-name="Suriname" data-dial-code="597">Suriname
                                        </option>
                                        <option value="sj" @if(old('country')=='sj' ) selected @endif
                                            data-country-name="Svalbard and Jan Mayen" data-dial-code="47">
                                            Svalbard and Jan Mayen</option>
                                        <option value="sz" @if(old('country')=='sz' ) selected @endif
                                            data-country-name="Swaziland" data-dial-code="268">Swaziland
                                        </option>
                                        <option value="se" @if(old('country')=='se' ) selected @endif
                                            data-country-name="Sweden " data-dial-code="46">Sweden
                                        </option>
                                        <option value="ch" @if(old('country')=='ch' ) selected @endif
                                            data-country-name="Switzerland " data-dial-code="41">
                                            Switzerland </option>
                                        <option value="sy" @if(old('country')=='sy' ) selected @endif
                                            data-country-name="Syria " data-dial-code="963">Syria
                                        </option>
                                        <option value="tw" @if(old('country')=='tw' ) selected @endif
                                            data-country-name="Taiwan " data-dial-code="886">Taiwan
                                        </option>
                                        <option value="tj" @if(old('country')=='tj' ) selected @endif
                                            data-country-name="Tajikistan" data-dial-code="992">
                                            Tajikistan
                                        </option>
                                        <option value="tz" @if(old('country')=='tz' ) selected @endif
                                            data-country-name="Tanzania" data-dial-code="255">Tanzania
                                        </option>
                                        <option value="th" @if(old('country')=='th' ) selected @endif
                                            data-country-name="Thailand " data-dial-code="66">Thailand
                                        </option>
                                        <option value="tl" @if(old('country')=='tl' ) selected @endif
                                            data-country-name="Timor-Leste" data-dial-code="670">
                                            Timor-Leste</option>
                                        <option value="tg" @if(old('country')=='tg' ) selected @endif
                                            data-country-name="Togo" data-dial-code="228">Togo</option>
                                        <option value="tk" @if(old('country')=='tk' ) selected @endif
                                            data-country-name="Tokelau" data-dial-code="690">Tokelau
                                        </option>
                                        <option value="to" @if(old('country')=='to' ) selected @endif
                                            data-country-name="Tonga" data-dial-code="676">Tonga</option>
                                        <option value="tt" @if(old('country')=='tt' ) selected @endif
                                            data-country-name="Trinidad and Tobago" data-dial-code="1868">
                                            Trinidad and Tobago</option>
                                        <option value="tn" @if(old('country')=='tn' ) selected @endif
                                            data-country-name="Tunisia " data-dial-code="216">Tunisia
                                        </option>
                                        <option value="tr" @if(old('country')=='tr' ) selected @endif
                                            data-country-name="Turkey " data-dial-code="90">Turkey
                                        </option>
                                        <option value="tm" @if(old('country')=='tm' ) selected @endif
                                            data-country-name="Turkmenistan" data-dial-code="993">
                                            Turkmenistan</option>
                                        <option value="tc" @if(old('country')=='tc' ) selected @endif
                                            data-country-name="Turks and Caicos Islands" data-dial-code="1649">
                                            Turks and Caicos Islands</option>
                                        <option value="tv" @if(old('country')=='tv' ) selected @endif
                                            data-country-name="Tuvalu" data-dial-code="688">Tuvalu
                                        </option>
                                        <option value="vi" @if(old('country')=='vi' ) selected @endif
                                            data-country-name="U.S. Virgin Islands" data-dial-code="1340">
                                            U.S. Virgin Islands</option>
                                        <option value="ug" @if(old('country')=='ug' ) selected @endif
                                            data-country-name="Uganda" data-dial-code="256">Uganda
                                        </option>
                                        <option value="ua" @if(old('country')=='ua' ) selected @endif
                                            data-country-name="Ukraine " data-dial-code="380">Ukraine
                                        </option>
                                        <option value="ae" @if(old('country')=='ae' ) selected @endif
                                            data-country-name="United Arab Emirates " data-dial-code="971">
                                            United
                                            Arab Emirates </option>
                                        <option value="gb" @if(old('country')=='gb' ) selected @endif
                                            data-country-name="United Kingdom" data-dial-code="44">United
                                            Kingdom</option>
                                        <option value="us" @if(old('country')=='us' ) selected @endif
                                            data-country-name="United States" data-dial-code="1">United
                                            States</option>
                                        <option value="uy" @if(old('country')=='uy' ) selected @endif
                                            data-country-name="Uruguay" data-dial-code="598">Uruguay
                                        </option>
                                        <option value="uz" @if(old('country')=='uz' ) selected @endif
                                            data-country-name="Uzbekistan " data-dial-code="998">
                                            Uzbekistan </option>
                                        <option value="vu" @if(old('country')=='vu' ) selected @endif
                                            data-country-name="Vanuatu" data-dial-code="678">Vanuatu
                                        </option>
                                        <option value="va" @if(old('country')=='va' ) selected @endif
                                            data-country-name="Vatican City " data-dial-code="39">Vatican
                                            City </option>
                                        <option value="ve" @if(old('country')=='ve' ) selected @endif
                                            data-country-name="Venezuela" data-dial-code="58">Venezuela
                                        </option>
                                        <option value="vn" @if(old('country')=='vn' ) selected @endif
                                            data-country-name="Vietnam " data-dial-code="84">Vietnam
                                        </option>
                                        <option value="wf" @if(old('country')=='wf' ) selected @endif
                                            data-country-name="Wallis and Futuna" data-dial-code="681">
                                            Wallis and Futuna</option>
                                        <option value="eh" @if(old('country')=='eh' ) selected @endif
                                            data-country-name="Western Sahara " data-dial-code="212">
                                            Western Sahara </option>
                                        <option value="ye" @if(old('country')=='ye' ) selected @endif
                                            data-country-name="Yemen " data-dial-code="967">Yemen
                                        </option>
                                        <option value="zm" @if(old('country')=='zm' ) selected @endif
                                            data-country-name="Zambia" data-dial-code="260">Zambia
                                        </option>
                                        <option value="zw" @if(old('country')=='zw' ) selected @endif
                                            data-country-name="Zimbabwe" data-dial-code="263">Zimbabwe
                                        </option>
                                        <option value="ax" @if(old('country')=='ax' ) selected @endif
                                            data-country-name="Åland Islands" data-dial-code="358">Åland
                                            Islands</option>
                                    </select>
                                    <span style="color:red">@error('country'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <!--<div class="col-3">-->
                                <!--    <label for="requirements">Research Requirements:</label>-->
                                <!--</div>-->
                                <div class="col">
                                    <textarea name="requirements" id="requirements" cols="30" rows="3" placeholder="Enter Research Requirements"
                                        class="form-control" value="{{ old('fname') }}"></textarea>
                                    <span style="color:red">@error('requirements'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block ">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
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
@section('script')
 <script src="{{route('home')}}/assets/js/checkout.js"></script>
@endsection
