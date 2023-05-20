@extends('layouts.applayout')
@section('content')


<div class="container-fluid my-5 pt-5">
    <div class="container mt-5 pb-3 rounded-top" style="background-color:#f0f7fd">
        <div class="text-center">
            <h5><img src="" alt=""></h5>
            <h4 class="text-success">Thank you for selecting</h4>
            <h4 class="text-success">Bank Wire Transfer Option</h4>
            <hr style=" border-top: 1px dashed black;color:white">
            <p>It is our privileged to serve you research and consulting needs. One of the account managers would reach
                you within next 24 hours alogn with the bank-wire transfer details.</p>
            <p>You can also reach us at:<a href="mailto:sales@flairinsights.com?Subject=Flair%20Insights%20Enquiry"
                    class="orange" target="_top">sales@flairinsights.com</a></p>
        </div>
        </div>
    <div class="container rounded-bottom">
        <div class="row py-3 text-light bg-dark ">
            <div class="col">
                <span class="bg-light"><img src="{{route('home')}}/assets/img/us-flag.png" alt="" style="width:35px"></span>
                <span><b>U.S: </b> +1-206-701-6702</span>
            </div>
            <div class="col">
            <span class="bg-light"><img src="{{route('home')}}/assets/img/us-flag.png" alt="" style="width:35px"></span>                <span><b>U.S: </b> +1-206-701-6702</span>
            </div>
            <div class="col">
            <span class="bg-light"><img src="{{route('home')}}/assets/img/us-flag.png" alt="" style="width:35px"></span>                <span><b>U.S: </b> +1-206-701-6702</span>
            </div>
            <div class="col">
            <span class="bg-light"><img src="{{route('home')}}/assets/img/us-flag.png" alt="" style="width:35px"></span>                <span><b>U.S: </b> +1-206-701-6702</span>
            </div>
        </div>
    </div>
  
</div>


@endsection

@section('script')
@endsection