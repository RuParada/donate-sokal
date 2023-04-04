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
                    <h1 class="text-white">Report</h1>
                    <p>This page displays the latest events created by the foundation</p>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Latest </span> Events</h2>
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
                                    <!-- <div class="date">
                                        {{ date('M j', strtotime($Event->created_at)) }}
                                    </div> -->
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_en, 0, 150) !!}</a>
                                    </h3>
                                    <p>
                                        {!! substr($Event->Content_en, 0, 170) !!} ...
                                    </p>
                                    <!-- <div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
                                        <div class="single_time">
                                            <h4 class="days">{!! $Event->Days !!}</h4>
                                            <p>Days</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="hours">{!! $Event->Hours !!}</h4>
                                            <p>Hours</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="minutes">{!! $Event->Minutes !!}</h4>
                                            <p>Minutes</p>
                                        </div>
                                    </div> -->
                                    <a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Learn More</a>
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
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thankgenerositys for your heart.</p>
                    <h1>Contribute to our charitable work with your donations. Thanks for your heart.</h1>
                     <a href="https://sokal.life#donate" class="primary-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>

<!-- ============================================================= Content end   ============================================================= -->
@endsection