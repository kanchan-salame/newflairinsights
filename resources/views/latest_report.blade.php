@extends('layouts.applayout')
@section('content')
    <main id="main">

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
                                        <div class="btn btn-light customBtn">
                                            <a href="">Aerospace & Defense </a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Automobile</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Automotive & Transportation</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Chemicals & Materials</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Consumer Goods</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Energy</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Food and Beverages</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Healthcare</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">ICT & Automation</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Manufacturing & Construction</a>
                                        </div>
                                        <div class="btn btn-light customBtn">
                                            <a href="">Semiconductor & Electronics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-12 mt-4">
                                <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>William Anderson</h4>
                                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                        <br>
                                        <div class="d-flex">
                                            <a href="#" class="btn-learn-more"><i class="ri-eye-fill"></i> View Report</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-file-fill"></i> Request A Sample</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-phone-fill"></i> Inquiry Before Buying</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="400">
                                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                        <br>
                                        <div class="d-flex">
                                            <a href="#" class="btn-learn-more"><i class="ri-eye-fill"></i> View Report</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-file-fill"></i> Request A Sample</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-phone-fill"></i> Inquiry Before Buying</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>William Anderson</h4>
                                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                        <br>
                                        <div class="d-flex">
                                            <a href="#" class="btn-learn-more"><i class="ri-eye-fill"></i> View Report</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-file-fill"></i> Request A Sample</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-phone-fill"></i> Inquiry Before Buying</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="400">
                                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                        <br>
                                        <div class="d-flex">
                                            <a href="#" class="btn-learn-more"><i class="ri-eye-fill"></i> View Report</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-file-fill"></i> Request A Sample</a>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="btn-learn-more"><i class="ri-phone-fill"></i> Inquiry Before Buying</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
