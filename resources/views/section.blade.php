<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual ta'lim</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <div class="py-2 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 d-none d-lg-block">
                        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span>
                            Savolingiz bormi?</a>
                        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>+998 94 911 33 22</a>
                        <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>
                            info@virtual-talim.uz</a>
                    </div>
                </div>
            </div>
        </div>

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo">
                        <a href="{{ route('index') }}" class="d-block">
                            <img src="{{ asset('images/logo.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active">
                                    <a href="{{ route('index') }}" class="nav-link text-left">Bosh sahifa</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Ilmiy ish haqida</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Bo'limlar va boblar</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Muallif</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left">Bog'lanish</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ml-auto">
                        <div class="social-wrap">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a>

                            <a href="#"
                                class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 pt-5"
            style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2 class="mb-0">{{ $section->title }}</h2>
                        <p>{{ $section->name }}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="custom-breadcrumns border-bottom">
            <div class="container">
                <a href="{{ route('index') }}">Bosh sahifa</a>
                <span class="mx-3 icon-keyboard_arrow_right"></span>
                <span class="current">{{ $section->title }}</span>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    @foreach ($lessons as $key => $lesson)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="course-1-item">
                                <figure class="thumnail">
                                    <a href="course-single.html"><img src="{{ asset('images/course_6.jpg') }}"
                                            alt="Image" class="img-fluid"></a>
                                    <div class="price">{{ $key + 1 }} dars</div>
                                    <div class="category">
                                        <a href="{{ route('show_lesson', $lesson->id) }}"><h3>{{ $lesson->title }}</h3></a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="mb-4">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        </p>
                        <p>Virtual taʼlim orqali informatika o'qituvchilarining kasbiy kompetensiyalarini
                            rivojlantirishga xizmat qiluvchi innovatsion platforma.</p>
                        <p><a href="#">Batafsil o'qish</a></p>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Kampusimiz</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Ilmiy loyiha haqida</a></li>
                            <li><a href="#">Yangiliklar</a></li>
                            <li><a href="#">Tajriba darslari</a></li>
                            <li><a href="#">Loyiha jamoasi</a></li>
                            <li><a href="#">Hamkorlar</a></li>
                            <li><a href="#">Resurslar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Kurs boblari</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Virtual taʼlim konsepsiyasi</a></li>
                            <li><a href="#">Virtual mashinalar</a></li>
                            <li><a href="#">Gipervisorlar</a></li>
                            <li><a href="#">Bulutli texnologiyalar</a></li>
                            <li><a href="#">Kasbiy kompetensiyalar</a></li>
                            <li><a href="#">Eksperimental natijalar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>Bog'lanish</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Yordam markazi</a></li>
                            <li><a href="#">Telegram: @yourusername</a></li>
                            <li><a href="#">Email: info@virtualtalim.uz</a></li>
                            <li><a href="#">Fikr bildirish</a></li>
                            <li><a href="#">Hamkorlik taklifi</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p>
                            &copy; 2025 Barcha huquqlar himoyalangan | Dasturchi: <a
                                href="https://instagram.com/samandar_sariboyev" target="_blank">Samandar Sariboyev</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#51be78" />
        </svg></div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
