@extends('layouts.main')


@section('content')
    <section>
        <div class="block top-padd30 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-box">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="search-found">
                                    <h3 itemprop="headline">Busqueda para <span class="red-clr">"{{ $keyword }}"</span>
                                    </h3>
                                    @if(count($searching) > 0)
                                        <p itemprop="description">Encontramos los siguientes resultados para su busqueda</p>
                                    @else
                                        <p itemprop="description">Lamentablemente no hemos encontrado ningún resultado</p>
                                    @endif
                                    <form class="search-frm" method="post" action="{{ route('filter.commerce') }}">
                                        @csrf
                                        <input type="text" name="keywords" placeholder="Nombre Comercio">
                                        <button class="red-bg" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="remove-ext">
                                    <div class="row">
                                        <div class="masonry">
                                            @foreach($searching as $search)
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn"
                                                         data-wow-delay="0.1s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="{{ route('name.commerce', $search->slug) }}"
                                                               title=""
                                                               itemprop="url">
                                                                @if (!$search->logo)
                                                                    <img src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                                                         alt="{{ $search->name }}" itemprop="image">
                                                                @else
                                                                    <img src="{{ asset('users/images/' . $search->user->id . '/comercio/358x250-'. $search->logo) }}"
                                                                         alt="{{ $search->name }}" itemprop="image">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                    <span class="red-clr">{{ $search->province->name }}
                                                        - {{ $search->address }}</span>
                                                            <h4 itemprop="headline"><a
                                                                        href="{{ route('name.commerce', $search->slug) }}"
                                                                        title=""
                                                                        itemprop="url">{{ $search->name }}</a></h4>
                                                            <span class="food-types">Sobre nosotros:
                                                        <em class="yellow-clr">{{ Str::limit($search->about, 100)  }}</em>
                                                    </span>
                                                            {{--<ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>--}}
                                                            <span class="post-likes style2 red-clr"><i
                                                                        class="fa fa-heart-o"></i> {{ $search->votes_positive }}</span>
                                                            <a class="brd-rd5"
                                                               href="{{ route('name.commerce', $search->slug) }}"
                                                               title="Order Online">Ir al comercio</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection