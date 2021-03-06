@extends('layouts.main')

@section('title', 'Receta ' . $recipe->name)

@section('meta-description', '✍ Receta' . $recipe->name)

@section('og:url', 'https://guiaceliaca.com.ar/recetas/' . $recipe->slug)
@section('og:title', $recipe->name)
@section('og:description', 'Consulta muchas más recetas en Guía Celíaca')
@section('og:image', 'https://guiaceliaca.com.ar/users/images/3/receta/718x415-' .$recipe->photos)

@section('style')
    <link rel="stylesheet" href="{{ asset('style/css/shareButton.css') }}">
@endsection

@section('content')
    <section>
        <div class="block gray-bg bottom-padd210 top-padd30">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-box">
                            <div class="sec-wrapper">
                                <div class="col-md-8 col-sm-12 col-lg-8">
                                    <div class="restaurant-detail-wrapper">
                                        <div class="restaurant-detail-info">
                                            <div class="restaurant-detail-thumb">
                                                <ul class="restaurant-detail-img-carousel">
                                                    <li><img class="brd-rd3"
                                                             src="{{ asset('users/images/'. $recipe->user_id . '/receta/718x415-' . $recipe->photos ) }}"
                                                             alt="{{ $recipe->name }}" itemprop="image"></li>
                                                </ul>
                                            </div>
                                            <div class="restaurant-detail-title">
                                                <h1 itemprop="headline">{{ $recipe->name }}</h1>
                                                <div class="info-meta">
                                                    <span>{{ $recipe->created_at->format('d') }} {{ $recipe->created_at->format('M') }}</span>
                                                </div>
                                                <div class="rating-wrapper">
                                                    <a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i
                                                                class="fa fa-heart"></i> <i>{{ $recipe->likes }}</i></a>
                                                </div>

                                                <div class="book-table">
                                                    <h4 class="title3" itemprop="headline"><span
                                                                class="sudo-bottom sudo-bg-red">Ingre</span>dientes</h4>
                                                </div>
                                                    {!! $recipe->ingredients !!}
                                                <div class="book-table">
                                                    <h4 class="title3" itemprop="headline"><span
                                                                class="sudo-bottom sudo-bg-red">Pa</span>sos</h4>
                                                </div>
                                                {!! $recipe->steps !!}

                                                <a class="brd-rd3" href="{{ route('recipe.like', $recipe) }}" title=""
                                                   itemprop="url"><i class="fa fa-heart"></i> ¿Te gusto la receta?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="col-md-4 col-sm-12 col-lg-4">--}}
                                    {{--<div class="order-wrapper">--}}
                                        {{--<div class="order-inner gradient-brd">--}}
                                            {{--<h4 itemprop="headline">Your Order</h4>--}}
                                            {{--<div class="order-list-wrapper">--}}
                                                {{--<ul class="order-list-inner">--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dish-name">--}}
                                                            {{--<i>.1</i> <h6 itemprop="headline">Chicken Tandoori--}}
                                                                {{--Special</h6> <span class="price">$85.00</span>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="dish-ingredients">--}}
                                                            {{--<span class="check-box"><input type="checkbox"--}}
                                                                                           {{--id="checkbox1-1"><label--}}
                                                                        {{--for="checkbox1-1"><span>Drink</span> <i>$12</i></label></span>--}}
                                                            {{--<span class="check-box"><input type="checkbox"--}}
                                                                                           {{--id="checkbox1-2"><label--}}
                                                                        {{--for="checkbox1-2"><span>Butter</span> <i>$12</i></label></span>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="mor-ingredients">--}}
                                                            {{--<a class="red-clr" href="#" title="" itemprop="url">Edit</a>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dish-name">--}}
                                                            {{--<i>.2</i> <h6 itemprop="headline">Chicken Tandoori--}}
                                                                {{--Special</h6> <span class="price">$90.00</span>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="dish-ingredients">--}}
                                                            {{--<span class="check-box"><input type="checkbox"--}}
                                                                                           {{--id="checkbox2-1"><label--}}
                                                                        {{--for="checkbox2-1"><span>Drink</span> <i>$10</i></label></span>--}}
                                                            {{--<span class="check-box"><input type="checkbox"--}}
                                                                                           {{--id="checkbox2-2"><label--}}
                                                                        {{--for="checkbox2-2"><span>Butter</span> <i>$20</i></label></span>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="mor-ingredients">--}}
                                                            {{--<a class="red-clr" href="#" title="" itemprop="url">Edit</a>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<div class="dish-name">--}}
                                                            {{--<i>.3</i> <h6 itemprop="headline">Chicken Tandoori--}}
                                                                {{--Special</h6> <span class="price">$100.00</span>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="dish-ingredients">--}}
                                                            {{--<span class="check-box"><input type="checkbox"--}}
                                                                                           {{--id="checkbox3-1"><label--}}
                                                                        {{--for="checkbox3-1"><span>Drink</span> <i>$30</i></label></span>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="mor-ingredients">--}}
                                                            {{--<a class="red-clr" href="#" title="" itemprop="url">Edit</a>--}}
                                                            {{--<div class="ingradient-list yellow-bg">--}}
                                                                {{--<span class="check-box"><input type="checkbox"--}}
                                                                                               {{--id="checkbox4-1"><label--}}
                                                                            {{--for="checkbox4-1"><span>Extra Drink</span></label></span>--}}
                                                                {{--<span class="check-box"><input type="checkbox"--}}
                                                                                               {{--id="checkbox4-2"><label--}}
                                                                            {{--for="checkbox4-2"><span>Extra Drink</span></label></span>--}}
                                                                {{--<span class="check-box"><input type="checkbox"--}}
                                                                                               {{--id="checkbox4-3"><label--}}
                                                                            {{--for="checkbox4-3"><span>Extra Drink</span></label></span>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--<ul class="order-total">--}}
                                                    {{--<li><span>SubTotal</span> <i>$158</i></li>--}}
                                                    {{--<li><span>Delivery fee</span> <i>$70</i></li>--}}
                                                    {{--<li><span>Tax</span> <i>$12</i></li>--}}
                                                {{--</ul>--}}
                                                {{--<ul class="order-method brd-rd2 red-bg">--}}
                                                    {{--<li><span>Total</span> <span class="price">$340</span></li>--}}
                                                    {{--<li><span class="radio-box"><input type="radio" name="method"--}}
                                                                                       {{--id="pay1-1"><label--}}
                                                                    {{--for="pay1-1"><i--}}
                                                                        {{--class="fa fa-money"></i> Cash</label></span>--}}
                                                        {{--<span class="radio-box"><input type="radio" name="method"--}}
                                                                                       {{--id="pay1-2"><label--}}
                                                                    {{--for="pay1-2"><i class="fa fa-credit-card-alt"></i> Card</label></span>--}}
                                                    {{--</li>--}}
                                                    {{--<li><a class="brd-rd2" href="#" title="" itemprop="url">CONFIRM--}}
                                                            {{--ORDER</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Section Box -->
        </div>
    </section>
@endsection