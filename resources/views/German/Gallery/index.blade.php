@extends('German.layout.main')

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
                    <h1 class="text-white">Cвітлини</h1>
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
                    <!-- <div class="jumbotron">
                        <div class="js-rating heart-shape" data-like="0"></div>
                    </div> -->
                @endforeach
            </div>
        </div>
    </section>
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Дякуємо вам з усього серця.</p>
                    <h1>Внесіть свій внесок у нашу благодійну роботу своїми пожертвами. Дякуємо вам з усього серця.</h1>
                    <a href="{!! url('Causes') !!}" class="primary-btn">Зробити пожертву</a>
                </div>
            </div>
        </div>
    </div>

<!-- ============================================================= Content end   ============================================================= -->
@endsection