<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Css customer styles-->
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{asset('bower_components/swiper/css/swiper-bundle.min.css')}}">
    <!-- Ows Carrusel -->
    <link rel="stylesheet" href="{{asset('bower_components/owlcarrusel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/owlcarrusel/css/owl.theme.default.min.css')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Yoppen</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Fixed navbar -->
    <nav id="nav-home" class="navbar navbar-default navbar-fixed-top menu-site">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar/">Default</a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>
                    <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>

        </div>
    </nav>
</head>

<body>
    <section class="slider">
        @include('landing.slider')
    </section>

    <section id="feature">
        @include('landing.feature')
    </section>

    <section id="product-slider">
        @include('landing.product')   
    </section>
    <section id="product-slider">
        @include('landing.quienes-somos')   
    </section>

</body>
<footer>
    <!-- jQuery 3 -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/googleChart/js/loader.js')}}"></script>
    <script src="{{asset('bower_components/googleChart/js/grafic.js')}}"></script>
    <!-- Swiper slider-->
    <script src="{{asset('bower_components/swiper/js/swiper-bundle.min.js')}}"></script>
    <!-- Ows Carrusel -->
    <script src="{{asset('bower_components/owlcarrusel/js/owl.carousel.min.js')}}"></script>
    <!-- Custom js-->
    <script src="{{asset('js/homepage.js')}}"></script>
</footer>

</html>