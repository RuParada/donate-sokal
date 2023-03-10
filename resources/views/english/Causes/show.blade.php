@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<style type="text/css">
    .banner-area{background:url('{{ asset($Cause->image) }}') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!--================ Start Popular Causes Area =================-->
                    <h1 class="text-white">{!! $Cause->Title_en !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_details section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <!--================ Start Popular Causes Area =================-->
                    <img src="{{ asset($Cause->image) }}" class="img-fluid">
                </div>
            </div>
            <div class="event_content mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="right_content">
                    <!--================ Start Popular Causes Area =================-->
                    <p>{!! $Cause->Content_en !!}</p>
                    
                    <!--================ Start Popular Causes Area =================-->        
                    <form class="form-contact contact_form" method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
                     {!! csrf_field() !!}
                     
                    <input type="hidden" name="_token" value="ug6eemUCaFgFpEhMsNXGItcSnp67y91yci5xvp3J">
                    <div class="form-group">
                      <input class="form-control" id="amount" type="text" name="amount" placeholder="Donations via Paypal in dollars, for example:: 50">
                    </div>
                    <div class="form-group mt-2 mb-5 mb-lg-0 btn_center">
                      <button type="submit" class="button button-contactForm primary-btn">Donation with PayPal</button>
                    </div>
                    </form>  
                    <!--================ Start Popular Causes Area =================-->
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thanks for your heart.</p>
                    <h1>Contribute to our charitable work with your donations. Thanks for your heart.</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection