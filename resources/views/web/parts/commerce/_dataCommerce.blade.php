@extends('layouts.main')

@section('title',' ⚠ ' . $commerce->name . ' local para celiacos')

@section('meta-description','💪 Local de comida sin TACC '.$commerce->name .' ingresa y conoce más sobre este local')

@section('og:url', 'https://guiaceliaca.com.ar/' . $commerce->slug)
@section('og:title', $commerce->name)
@section('og:description', $commerce->about)
@if ($commerce->logo)
    @section('og:image', 'https://guiaceliaca.com.ar/users/images/' . $commerce->user->id . '/comercio/358x250-'. $commerce->logo)
@endif

@section('content')
    <section>
        <div class="block gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        @include('alerts.error')
                        <div class="sec-box">
                            <div class="sec-wrapper">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="restaurant-detail-wrapper">
                                            <div class="restaurant-detail-info">
                                                <div class="restaurant-detail-thumb">
                                                    @if (!$commerce->logo)
                                                        <img class="brd-rd3"
                                                             src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                                             alt="{{ $commerce->name }}" itemprop="image">
                                                    @else
                                                        <img class="brd-rd3"
                                                             src="{{ asset('users/images/' . $commerce->user->id . '/comercio/358x250-'. $commerce->logo) }}"
                                                             alt="{{ $commerce->name }}" itemprop="image">
                                                    @endif
                                                </div>
                                                <div class="restaurant-detail-title">
                                                    <h1 itemprop="headline">{{ $commerce->name }}</h1>
                                                    <div class="info-meta">
                                                        <span>{{ $commerce->address }}</span>
                                                        <span>{{ $commerce->province->name }}</span>
                                                    </div>
                                                </div>

                                                <div class="restaurant-detail-title">
                                                    <div class="info-meta">
                                                        <span>{!! $commerce->about !!}</span>
                                                    </div>
                                                </div>
                                                <div class="restaurant-detail-tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1-1" data-toggle="tab"><i
                                                                        class="fa fa-cutlery"></i> Productos</a></li>
                                                        <li><a href="#tab1-3" data-toggle="tab"><i
                                                                        class="fa fa-star"></i> Comentarios</a></li>
                                                        <li><a href="#tab1-4" data-toggle="tab"><i
                                                                        class="fa fa-book"></i> Mensaje al Comercio</a></li>
                                                        <li><a href="#tab1-5" data-toggle="tab"><i
                                                                        class="fa fa-info"></i> Información Comercio</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        @include('web.parts.commerce._listProducts')
                                                        @include('web.parts.commerce._comments')
                                                        @include('web.parts.commerce._message')
                                                        @include('web.parts.commerce._infoCommerce')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @include('web.parts.commerce._asideCommerce')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('web.parts._modalLogin')
@endsection


@section('script')
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
@endsection

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Restaurant",
  "name" : "{{ $commerce->name }}",
  @if ($commerce->logo)
        "image" : "{{ 'https://guiaceliaca.com.ar/users/images/' . $commerce->user->id . '/comercio/358x250-'. $commerce->logo }}",
  @else
        "image" : "https://guiaceliaca.com.ar/images/img-logo.png",
@endif
    "telephone" : "{{ $commerce->phone }}",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "{{ $commerce->address }}",
    "addressRegion" : "{{ $commerce->province->name }}"
    },
    "aggregateRating" : {
      "@type" : "AggregateRating",
      "ratingValue" : "Votos",
      "bestRating" : "{{$commerce->votes_positive }}",
      "ratingCount" : "{{$commerce->votes_positive + $commerce->votes_negative}}"
    }
  }











</script>