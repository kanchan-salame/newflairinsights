<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Ouick Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('aboutUs') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contactUs') }}">Contact</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('faq') }}">FAQ's</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('privacyPolicy') }}">Privacy
                                policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('termOfServices') }}">Terms of
                                service</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Payment Options</h4>
                    <img src="{{ route('home') }}/assets/img/payments.png" class="paddingTop10 mb-3">
                    <h4 class="mt-2">Social Links</h4>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/flairinsights/" target="_blank" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://twitter.com/FlairInsights/" target="_blank" class="twitter"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/flair-insights/about/?viewAsMember=true"
                            target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                         <a href="https://www.instagram.com/flair.insights/"
                            target="_blank" class="linkedin"><i class="bx bxl-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Contact Details</h4>
                    <br>
                    <p><i class="bi bi-phone"></i> +1 830 455 7727 (United States)</p>
                    <p><i class="bi bi-phone"></i> +91 89561 90780 (Rest of the world)</p>
                    <p><i class="bi bi-envelope"></i> sales@flairinsights.com</p>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Happy To Help You!</h3>
                    <p>
                        Flair Insights - U.S. Office<br>
                        170 S,<br>
                        Lincoln Ste 150,<br>
                        Spokane, WA 99201.<br><br>

                        Flair Insights - UAE Office<br>
                        P.O. Box 128019,<br>
                        Dubai, United Arab Emirates.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="copyright">
                Copyright <strong><span>&copy; </span></strong> 2023. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://salame.in/">Salame Apps</a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ route('home') }}/assets/vendor/aos/aos.js"></script>
<script src="{{ route('home') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ route('home') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ route('home') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ route('home') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ route('home') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{ route('home') }}/assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="{{ route('home') }}/assets/js/main.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
@yield('script')
</body>

</html>
