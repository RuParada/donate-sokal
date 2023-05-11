@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<style type="text/css">
    .banner-area{background:url('{{ asset($Event->image) }}') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-9">
                    <h1 class="text-white">{!! $Event->Title_gr !!}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="event_details section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="hide col-lg-10">
                    <img src="{{ asset($Event->image) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="event_content mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="right_content">
                            <h2 class="hide">{!! $Event->Title_gr !!}</h2>
                            <p>
                                {!! $Event->Content_gr !!}
                            </p>
                        </div>
                    </div>
                    
                </div>
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