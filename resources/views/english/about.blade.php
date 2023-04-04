@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-start align-items-center banner-content">
                <div class="col-lg-6">
                    <h1 class="text-white">About Us</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p>{!! Setting()->about_en !!}</p>
                    <!-- ===============================  About  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <style type="text/css">
            .about_area .about_bg{
                background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
                background-size:cover;
                position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
        </style>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="about_details lite_bg">
                        <!-- ===============================  About  ======================================== -->
                        <h2 class="hide">{!! Setting()->title_about_en !!}</h2>
                        <!-- ===============================  About  ======================================== -->
                        <p>{!! Setting()->content_about_en !!}</p>

                        
                        <div style="text-align:center;margin:25px auto 0;">
                            <br><iframe width="560" height="315" src="https://www.youtube.com/embed/G0-zRv6Dfng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Thankgenerositys for your heart.</p>
                    <h1>Contribute to our charitable work with your donations. Thanks for your heart.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="{!! url('Causes') !!}" class="primary-btn">donation</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection