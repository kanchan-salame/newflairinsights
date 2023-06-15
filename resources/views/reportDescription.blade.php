@extends('layouts.applayout')
@section('content')
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
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                        <div class="d-flex justify-content-center justify-content-lg-start mb-5">
                            <a href="tel:+1 830 455 7727" class="btn-get-started scrollto">
                                <i class="fas fa-phone"></i> Request Expert Call?
                            </a>
                            <a href="{{ route('askForDiscount', $report->slug) }}"
                                class="btn-get-started scrollto mr-2 ml-2">
                                <i class="fas fa-eye"></i> Ask for Discount
                            </a>
                            <a href="{{ route('rquestSample', $report->slug) }}" class="btn-get-started scrollto">
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
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Table of Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu2">Methodology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link getstarted blink_me " id="blink_btn"
                                href="{{ route('rquestSample', $report->slug) }}">Need Customization</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            {!! $report->description_one !!}
                            <img src="{{ $report->image_one ? route('home') . '/storage/' . $report->image_one : route('home') . '/assets/img/Darts Market Global Outlook 22.jpg' }}"
                                alt="" class="mb-2 mt-2" style="width: 100%;height: 300px;">
                            {!! $report->description_two !!}
                            <img src="{{ $report->image_one ? route('home') . '/storage/' . $report->image_one : route('home') . '/assets/img/Darts Market 22 - Copy.jpg' }}"
                                alt="" class="mb-2 mt-2" style="width: 100%;height: 300px;">

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
                                alt="" class="mb-2 mt-2" style="width: 100%;height: 300px;">

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
                                    <img src="{{ route('home') . '/assets/img/flairInsightslogo.jpg' }}" alt=""
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
                            <div class=" contact side-contact-us" id="contact">
                                <div class="options">
                                    <h6>Contact Us</h6>
                                    <div class="row">
                                        <form action="{{ route('contact.store') }}" method="post" role="form"
                                            class="php-email-form">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="name" class="form-control" name="name"
                                                        class="form-control" id="name" required placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" type="email" class="form-control" name="email"
                                                        id="email" required placeholder="Business Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" placeholder="Write subject..."
                                                        type="text" name="subject" id="subject" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" placeholder="Write a Massage..."
                                                        name="message" rows="4" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="loading">Loading</div>
                                                    <!-- <div id="error-message"
                                                        class="error-message w-50 alert alert-danger alert-dismissible fade show"
                                                        style="background-color:green">
                                                    </div> -->
                                                    <div id="error-message" class=" error-message alert alert-danger alert-dismissible fade show" style="background-color:green; align-content: center;
    width: 100%;">
                                                        <button style="position-relative" type="button" class="close"
                                                            data-dismiss="alert">×</button>
                                                    </div>
                                                    <div class="sent-message">Your message has been sent. Thank you!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-0">
                                                <div class="col-sm-12 m-0">
                                                    <button type="submit" class="btn btn-primary"
                                                        class="text-center">Submit</button>
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
