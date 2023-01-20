@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-start align-items-center banner-content">
                <div class="col-lg-6">
                    <h1 class="text-white">Gallery</h1>
                    <p>This page displays the all photos by the foundation</p>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            
            <div class="row">
                @foreach($Gallery as $item)     
                                <figure style="width: 100%; padding-top: 20px;">
                                    <img class="img-fluid w-100" src="{!! asset($item->image) !!}">
                                   
                                </figure>
                @endforeach
            </div>
        </div>
    </section>
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thanks for your heart.</p>
                    <h1>Contribute to our charitable work with your donations. Thanks for your heart.</h1>
                     <a href="{!! url('Causes') !!}" class="primary-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>

<!-- ============================================================= Content end   ============================================================= -->
@endsection