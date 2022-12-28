@extends('layouts.applayout')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">

        <section id="team" class="team section-bg mt-5">
            <div class="container-fluid aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-lg-12 mt-4">
                                <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="member-info">
                                        <h4>Categories</h4>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                        <div>
                                            <a href="">Test Category</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <section id="portfolio" class="portfolio">
                            <div class="container aos-init aos-animate" data-aos="fade-up">
                                <div class="section-title">
                                    <h2>Portfolio</h2>
                                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum
                                        quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui
                                        impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                                    </p>
                                </div>
                                <ul id="portfolio-flters" class="d-flex justify-content-center aos-init aos-animate"
                                    data-aos="fade-up" data-aos-delay="100">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-app" class="">App</li>
                                    <li data-filter=".filter-card" class="">Card</li>
                                    <li data-filter=".filter-web" class="">Web</li>
                                </ul>
                                <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up"
                                    data-aos-delay="200" style="position: relative; height: 1097.33px;">
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app"
                                        style="position: absolute; left: 0px; top: 0px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 1</h4>
                                            <p>App</p> <a href="assets/img/portfolio/portfolio-1.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="App 1"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link" title="More Details"><i
                                                    class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web"
                                        style="position: absolute; left: 380px; top: 0px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 3</h4>
                                            <p>Web</p> <a href="assets/img/portfolio/portfolio-2.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="Web 3"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link" title="More Details"><i
                                                    class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app"
                                        style="position: absolute; left: 760px; top: 0px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 2</h4>
                                            <p>App</p> <a href="assets/img/portfolio/portfolio-3.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="App 2"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card"
                                        style="position: absolute; left: 760px; top: 230.25px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 2</h4>
                                            <p>Card</p> <a href="assets/img/portfolio/portfolio-4.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="Card 2"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web"
                                        style="position: absolute; left: 380px; top: 268.7px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 2</h4>
                                            <p>Web</p> <a href="assets/img/portfolio/portfolio-5.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="Web 2"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app"
                                        style="position: absolute; left: 0px; top: 390.883px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 3</h4>
                                            <p>App</p> <a href="assets/img/portfolio/portfolio-6.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="App 3"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card"
                                        style="position: absolute; left: 760px; top: 495.65px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 1</h4>
                                            <p>Card</p> <a href="assets/img/portfolio/portfolio-7.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="Card 1"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card"
                                        style="position: absolute; left: 760px; top: 756.733px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 3</h4>
                                            <p>Card</p> <a href="assets/img/portfolio/portfolio-8.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="Card 3"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web"
                                        style="position: absolute; left: 380px; top: 830.85px;">
                                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg"
                                                class="img-fluid" alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 3</h4>
                                            <p>Web</p> <a href="assets/img/portfolio/portfolio-9.jpg"
                                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                                title="Web 3"><i class="bx bx-plus"></i></a> <a
                                                href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
