@extends('layouts.main')

@section('content')
    <section>
        <div class="block">
            <div style="background-image: url({{ asset('styleWeb/assets/images/topbg.jpg') }});" class="fixed-bg"></div>
            <div class="error-page-wrapper text-center">
                <div class="error-page-inner">
                    <h1 itemprop="headline">503 <span class="red-clr">Error</span></h1>
                    <h4 itemprop="headline"><span class="yellow-clr">Oops,</span> Estamos realizando mejoras al sitio, ya volvemos!</h4>
                    <a class="brd-rd2 yellow-bg" href="{{ url('/') }}" title="" itemprop="url"><i class="fa fa-home"></i> Volver a la Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection