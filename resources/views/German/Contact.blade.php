@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!--================ Start top-section Area =================-->
<style type="text/css">
  .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
</style>
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-lg-start align-items-center banner-content">
      <div class="col-lg-6">
        <h1 class="text-white">Контакти</h1>
        <!-- ===============================  Contact  ======================================== -->
        <!--<p>{{ Setting()->about_gr }}</p>-->
        <!-- ===============================  Contact  ======================================== -->
      </div>
    </div>
  </div>
</section>
<!-- =============== End top-section Area =================== -->
<!-- ================ contact section start ================= -->
<section class="section-gap">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4 contact" style="overflow: hidden;">
      <!-- ===============================  Contact  ======================================== -->
      <iframe src="{!! Setting()->Googlemap !!}" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Надішлить нам листа</h2>
        <!-- ===============================  Contact  ======================================== -->
        @if(session('Messagge'))
        <div class="alert alert-success" role="alert">
          Вітаю. Ваше повідомлення успішно надіслано
        </div>
        @endif
        <!-- ===============================  Contact  ======================================== -->
      </div>
      <div class="col-lg-8">
        <!-- ===============================  Contact  ======================================== -->
        <form class="form-contact contact_form" method="post" action="{{ route('Messages.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control w-100" name="Content" id="Content" cols="30" rows="9" placeholder="Введіть своє повідомлення"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="Введіть ім'я">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Введіть адресу електронної пошти">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" placeholder="Введіть текст">
              </div>
            </div>
          </div>
          <div class="form-group mt-2 mb-5 mb-lg-0">
            <button type="submit" class="button button-contactForm primary-btn">Відправити</button>
          </div>
        </form>
        <!-- ===============================  Contact  ======================================== -->
      </div>
      <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="icon-material-outline-location-on"></i></span>
          <div class="media-body">
            <h3>Головний офіс</h3>
            <!-- ===============================  Contact  ======================================== -->
            <p>{!! Setting()->Location !!}</p>
            <!-- ===============================  Contact  ======================================== -->
          </div>
        </div>

        <div class="media contact-info">
          <span class="contact-info__icon"><i class="icon-material-outline-email"></i></span>
          <div class="media-body">
            <!-- ===============================  Contact  ======================================== -->
            <h3><a href="mailto:support@colorlib.com">{{ Setting()->Email }}</a></h3>
            <!-- ===============================  Contact  ======================================== -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection