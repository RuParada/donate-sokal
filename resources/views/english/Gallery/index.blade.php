<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<style>
.fotorama__nav.fotorama__nav--thumbs{margin-bottom:50px}
</style>
@extends('english.layout.gallery')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg gallery-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-12">
                    <h1 class="text-white">Gallery</h1>
                    <p>This page displays the all photos by the foundation</p>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming_event_area section-gap-top" style="background-color:#ececec">
	<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-navposition="top">
        <!--<div class="container">            
            <div class="row">-->
                @foreach($Gallery as $item)     
                               <!-- <figure style="width: 100%; padding-top: 20px;">-->
                                    <img src="{!! asset($item->image) !!}" height="400" width="700">
                                   
                                <!--</figure>-->
                @endforeach
            <!--</div>
        </div>-->
	</div>
    </section>
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thank you for your generosity.</p>
                    <h1>Your contributions make our work possible</h1>
                     <a target="_blank" href="https://www.gofundme.com/f/the-future-of-ukraine-foundation-sokal/donate" class="primary-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>

<!-- ============================================================= Content end   ============================================================= -->
@endsection
