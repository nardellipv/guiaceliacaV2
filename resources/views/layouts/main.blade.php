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
    @toastr_css
{{--    @include('external.analytics')--}}
{{--    @include('external.hotjar')--}}
    {{--@include('external.adsenses')--}}
    {{--@include('external.pixel')--}}
    {{--@include('external.onesignal')--}}
    {!! htmlScriptTagJsApi() !!}
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

    @include('web.parts._modalLogin')

</main><!-- Main Wrapper -->


@yield('script')
@jquery
@toastr_js
@toastr_render

<script src="{{ asset('styleWeb/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('styleWeb/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('styleWeb/assets/js/plugins.js') }}"></script>
<script src="{{ asset('styleWeb/assets/js/main.js') }}"></script>
</body>

</html>