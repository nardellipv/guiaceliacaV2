<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guía Celíaca | @yield('title','Comercios celíacos') {{ date('Y') }}</title>
    <meta name="description" content="@yield('meta-description','Locales y vendedores de comida y productos para celíacos en toda Argentina.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios')">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/red-color.css') }}">
    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/yellow-color.css') }}">
    <link rel="stylesheet" href="{{ asset('styleWeb/assets/css/responsive.css') }}">

    <meta property="og:url" content="@yield('og:url', 'https://guiaceliaca.com.ar')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('og:title', 'Comunidad de celiacos en toda la argentina.')"/>
    <meta property="og:site_name" content="Guía Celíaca"/>
    <meta property="og:description" content="@yield('og:description', 'Locales y vendedores de comida y productos para celíacos en Argentina.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios')"/>
    <meta property="og:image" content="@yield('og:image', 'https://guiaceliaca.com.ar/styleWeb/assets/images/img-logo.png')"/>
    <meta property="fb:app_id" content="507631946630340"/>
    <meta property=“fb:admins" content=“109559280472432″/>

    {{--tostr--}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    @yield('style')

    {{--@include('external.analytics')--}}
    {{--@include('external.hotjar')--}}
    {{--@include('external.adsenses')--}}
    {{--@include('external.pixel')--}}
    {{--{!! RecaptchaV3::initJs() !!}--}}
</head>
<body itemscope>

<main>
    <div class="preloader">
        <div id="cooking">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div id="area">
                <div id="sides">
                    <div id="pan"></div>
                    <div id="handle"></div>
                </div>
                <div id="pancake">
                    <div id="pastry"></div>
                </div>
            </div>
        </div>
    </div>


    {{--cookie si el usuario no ingresa--}}
    @if(!Request()->cookie('login'))
        {{ Cookie::queue('ingreso', 'sin_ingreso', '2628000') }}
    @endif

    {!! Toastr::message() !!}

    @include('web.parts._menuWeb')

    @include('web.parts._menuMovil')

    @if(route::is('home'))
        @include('web.parts._banner')
    @endif

    @yield('content')

    @include('web.parts._footer')

    {{--<div class="newsletter-popup-wrapper text-center">
        <div class="newsletter-popup-inner" style="background-image: url(assets/images/newsletter-bg.jpg);">
            <a class="close-btn brd-rd50" href="#" title="Close Button" itemprop="url"><i class="fa fa-close"></i></a>
            <h3 itemprop="headline"><i class="fa fa-envelope-open red-clr"></i> SIGN UP FOR RECENT UPDATES</h3>
            <p itemprop="description">Join our Subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</p>
            <form class="newsletter-frm brd-rd30">
                <input class="brd-rd30" type="email" placeholder="ENTER YOUR EMAIL">
                <button class="brd-rd30 red-bg" type="submit">SUBSCRIBE</button>
            </form>
            <span class="red-clr"><i class="fa fa-check"></i> Thanks, your address has been added.</span>
        </div>
    </div>--}}<!-- Newsletter Popup Wrapper -->

    <div class="log-popup text-center">
        <div class="sign-popup-wrapper brd-rd5">
            <div class="sign-popup-inner brd-rd5">
                <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <div class="sign-popup-title text-center">
                    <h4 itemprop="headline">SIGN IN</h4>
                    <span>with your social network</span>
                </div>
                <div class="popup-social text-center">
                    <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                    <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                    <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                <form class="sign-form">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd3" type="text" placeholder="Username or Email">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd3" type="password" placeholder="Password">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a>
                            <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="sign-popup text-center">
        <div class="sign-popup-wrapper brd-rd5">
            <div class="sign-popup-inner brd-rd5">
                <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <div class="sign-popup-title text-center">
                    <h4 itemprop="headline">SIGN UP</h4>
                    <span>with your social network</span>
                </div>
                <div class="popup-social text-center">
                    <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                    <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                    <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                <form class="sign-form">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd3" type="text" placeholder="Username">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd3" type="email" placeholder="Email">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd3" type="password" placeholder="Password">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button class="red-bg brd-rd3" type="submit">REGISTER NOW</button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                            <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main><!-- Main Wrapper -->

<script src="{{ asset('styleWeb/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('styleWeb/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('styleWeb/assets/js/plugins.js') }}"></script>
<script src="{{ asset('styleWeb/assets/js/main.js') }}"></script>
</body>

</html>