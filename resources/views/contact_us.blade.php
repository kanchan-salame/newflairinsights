@extends('layouts.applayout')
@section('content')
<link rel="stylesheet" href="{{route('home')}}/assets/css/checkout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
    .iti--allow-dropdown {
        width: 100%;
    }
</style>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5 mb-5">
        <div class="container " data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Global Headquarters:</h4>
                                    <p>U.S. Office 170 S, Lincoln Ste 150, Spokane, WA 99201.</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>sales@flairinsights.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 830 455 7727, +91 89561 90780</p>
                                </div>

                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>UAE Headquarters:</h4>
                                    <p>UAE P.O. Box 128019, Dubai, United Arab Emirates.</p>
                                </div>
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Germany Headquarters:</h4>
                                    <p>Germany Office Frauenstr 42, München 8368.</p>
                                </div>
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>India Headquarters:</h4>
                                    <p>Nagpur Office 3, Level 2, Maxx Pride, Manish Nagar, Beltarodi Road, Maharashtra 441108.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" name="name" class="form-control" id="name" required placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="lname" required placeholder="Last Name">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div> --}}
                        </div>
                        <div class="form-group">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Your Email">
                        </div>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <label for="name">Phone No.</label>
                        </div>
                        <div class="form-group">
                            {{-- <label for="name">Phone No.</label> --}}
                            <input class="form-control" name="contact_no" id="phone" style="outline:none" type="tel" value="{{ old('contact_no') }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required placeholder="Message....."></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div id="error-message" class="error-message alert alert-danger alert-dismissible fade show"
                                style="background-color:green">
                            </div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
@endsection
@section('script')
 <script src="{{route('home')}}/assets/js/checkout.js"></script>
@endsection
