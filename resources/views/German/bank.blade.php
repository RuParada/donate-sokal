@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}

    table {
      border-collapse: collapse;
      border: 2px solid rgb(200,200,200);
      letter-spacing: 1px;
      font-weight: 900;
      width: 100%;
    }

    td, th {
      border: 1px solid rgb(190,190,190);
      padding: 10px 20px;
    }

    th {
      background-color: rgb(235,235,235);
    }

    td {
      text-align: left;
    }

    tr:nth-child(even) td {
      background-color: rgb(250,250,250);
    }

    tr:nth-child(odd) td {
      background-color: rgb(245,245,245);
    }

    caption {
      padding: 10px;
    }
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-start align-items-center banner-content">
                <div class="col-lg-6">
                    <h1 class="text-white">Реквізити банку</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p></p>
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
                        <table>
                          <tr>
                            <td>Назва Клієнта</td>
                            <td style="text-transform: uppercase;">Благодійний фонд "Майбутнє України. Сокальщина"</td>
                          </tr>
                          <tr>
                            <td>Код Клієнта</td>
                            <td>37326056</td>
                          </tr>
                          <tr>
                            <td>Назва банку</td>
                            <td>ФЛЬВІВСЬКЕ ОБЛАСНЕ УПР АТОЩАД М.ЛЬВІВ</td>
                          </tr>
                          <tr>
                            <td>МФО банку</td>
                            <td>325796</td>
                          </tr>
                          <tr>
                            <td>Рахунок Клієнта</td>
                            <td style="text-transform: uppercase;">UA953257960000026009300166021 (UAH) Благод.фонд"Майбутнє України.Сокальщин</td>
                          </tr>
                          <tr>
                            <td>Період виписки</td>
                            <td>з 01.12.2021 по 17.01.2022</td>
                          </tr>
                          <!-- <tr>
                            <td>Дата останього руху коштів</td>
                            <td>04.01.2022</td>
                          </tr> -->
                        </table>

                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="row align-items-end">
            <div class="col-lg-12">
                Більш детальна інформація за посиланням
            </div>
        </div> -->
    </section>
    <!--================ End About Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Дякуємо вам з щирого серця.</p>
                    <h1>Зробіть свій внесок у нашу благодійну роботу своїми пожертвуваннями.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="https://sokal.life/#donate" class="primary-btn">Зробити пожертву</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection