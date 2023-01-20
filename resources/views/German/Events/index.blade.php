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
                    <h1 class="text-white">Звіт</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Минулі </span> Події</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Events as $Event)     
                <div class="col-lg-12">
                    <div class="single_upcoming_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="{!! asset($Event->image) !!}" alt="">
                                    
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_gr, 0, 250) !!}</a>
                                    </h3>
                                    <p>
                                        {!! substr($Event->Content_gr, 0, 169) !!}...
                                    </p>
                                    
                                    <a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {!! $Events->links() !!}
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