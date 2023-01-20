@extends('english.layout.main')

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
                    <h1 class="text-white">Bank details</h1>
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
                            <td>Name of the Client</td>
                            <td style="text-transform: uppercase;">Благодійний фонд "Майбутнє України. Сокальщина"</td>
                          </tr>
                          <tr>
                            <td>Customer code</td>
                            <td>37326056</td>
                          </tr>
                          <tr>
                            <td>Name of the bank</td>
                            <td>ФЛЬВІВСЬКЕ ОБЛАСНЕ УПР АТОЩАД М.ЛЬВІВ</td>
                          </tr>
                          <tr>
                            <td>MFI bank</td>
                            <td>325796</td>
                          </tr>
                          <tr>
                            <td>Customer account</td>
                            <td style="text-transform: uppercase;">UA953257960000026009300166021 (UAH) Благод.фонд"Майбутнє України.Сокальщин</td>
                          </tr>
                          <tr>
                            <td>Period of discharge</td>
                            <td>з 01.12.2021 по 17.01.2022</td>
                          </tr>
                          <!-- <tr>
                            <td>The date of the last movement of funds</td>
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
                    <p>Thankgenerositys for your heart.</p>
                    <h1>Contribute to our charitable work with your donations. Thanks for your heart.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="https://sokal.life/#donate" class="primary-btn">Make a donation</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection