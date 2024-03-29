<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===================================== Meta site ================================================ -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- ====== Laravel description site edit delete from admin panel ================== -->
    <meta name="description" content="{!! Setting()->MetaDescription  !!}">
    <!-- ====== Laravel author site edit delete from admin panel ====================== -->
    <meta name="author" content="Благодійний фонд Майбутнє України Сокальщина">
    <meta name="keywords" content="Благодійний фонд Майбутнє України Сокальщина, Сокаль">
    <!-- ====== Laravel robots site edit delete from admin panel ================== -->
    <meta name="robots" content="{!! Setting()->SiteTitle  !!}">
    <!-- ====== Laravel favicon icon ================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/settings/May2022/fav_32.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/settings/May2022/fav_32.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/settings/May2022/fav_32.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/settings/May2022/fav.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/settings/May2022/fav.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/settings/May2022/fav.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/settings/May2022/fav.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/settings/May2022/fav.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/settings/May2022/fav.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(Setting()->FaviconOne) }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset(Setting()->FaviconTwo) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(Setting()->FaviconThree) }}">
    <link rel="manifest" href="{{ asset('assets/img/Savicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:url"           content="https://sokal.life" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="«Майбутнє України. Сокальщина»" />
    <meta property="og:description"   content="Благодійний фонд створений для підтримки школярів із малозабезпечених сімей міста Сокаль" />
    <meta property="og:image"         content="https://sokal.life/storage/settings/October2019/1.png" />
    <!-- ====== Laravel favicon icon================== -->
    <!-- ====== Laravel title site edit delete from admin panel ================== -->
    @if(isset(Setting()->SiteTitle))
    <title>{{ Setting()->SiteTitle }}</title>
    @else
    <title>Site Title</title>
    @endif
    <!-- ============================== GOOGLE WEB FONT ========================== -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icons.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" media="all" />
    <!-- =============================== BASE CSS stylesheet ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/social-buttons-share.css') }}" media="all" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font/font.css') }}" media="all" />
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!--================ Start Header Area =================-->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- =============================== BASE ======================================== -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    <img src="{{ asset(Setting()->LogoPicture) }}" alt="">
                </a>
                <!-- =============================== BASE  ======================================== -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <!-- =============================== BASE  ======================================== -->
                @foreach(Menugermans() as $Menu)
                <li><a href="{!! $Menu->url !!}" target="{!! $Menu->target !!}">{!! $Menu->title !!}</a></li>
                @endforeach
                </ul>
                @guest
                <!-- =============================== BASE ======================================== -->
                @else
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="genric-btn primary small"><i class="icon-feather-log-in"></i> {{ __('Вийти') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
                <!-- =============================== BASE ======================================== -->
                
            </div>
            <ul class="languagepicker large roundborders" id="navbar_lang">
                <a style="cursor: pointer;"><li><span><img src="{{ asset('assets/img/ukraine.png') }}"/></span><span style="padding-left: 7px;font-size: 16px;">Ukrainian</span></li></a>
                <a href="{!! url('English') !!}"><li><span><img src="{{ asset('assets/img/english.png') }}"/></span><span style="padding-left: 7px;font-size: 16px;font-weight: 500;color: #535353;">English</span></li></a>
            </ul>
        </div>
    </nav>
</header>
<!--=============================================================== End Header Area =================-->
@yield('content')
<!--=============================================================== start footer Area =================-->
<footer class="footer" style="display:none">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <!-- =============================== Setting BASE ======================================== -->
                        <h4 class="footer_title large_title"><img src="{{ asset(Setting()->LogoPicture) }}" alt="Logo" style="width: 120px; height: 70px;"></h4>
                        <p>
                            <!-- =============================== Setting BASE ======================================== -->
                            {{ Setting()->about_gr }}
                        </p>
                        <p>
                         Copyright &copy; Alle Rechte vorbehalten   <a href="{{ url('/') }}" target="_blank">{{ Setting()->SiteTitle }}</a>
                      </p>
                      <!-- =============================== Setting BASE ======================================== -->
                  </div>
              </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h4 class="footer_title">Контакти</h4>
                    <div class="ml-5">
                        <p class="sm-head">
                            <span class="icon-material-outline-location-on"></span>
                            Головний офіс
                        </p>
                        <!-- =============================== Setting BASE ======================================== -->
                        <p>{{ Setting()->Location }}</p>

                        

                        <p class="sm-head">
                            <span class="icon-material-outline-email"></span>
                            Email
                        </p>
                        <p>
                            <a href="mailto:{{ Setting()->Email }}" target="_blank">{{ Setting()->Email }}</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</footer>
<!--================ End footer Area =================-->
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/jquery.ajaxchimp.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/parallax.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/countdown.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<!-- =============================== javascript ================ -->
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/social-buttons-share.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/like-dislike.js') }}"></script>
<script>
    $(function () {
        $('.js-rating-simple').thumbs();
        $('.js-rating').thumbs({
            /*onLike: function (value) {
                alert ('Вподобайка поставлена. Дякуэм!');
            },
            onDislike: function(value) {
               alert ('Im sorry.');
            }*/
        });
    })
</script>
</body>

</html>
