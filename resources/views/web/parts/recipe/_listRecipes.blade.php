@extends('layouts.main')

@section('title', '📑 Recetas creadas por otros celíacos')

@section('meta-description','👉 Recetas para celíacos faciles de preparar y creadas totalmente por la comunidad 👍')


@section('content')
    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="filters-wrapper">
                                <ul class="filter-buttons center">
                                    <li class="active"><a class="brd-rd30" data-filter="*" href="#"
                                                          itemprop="url">Todos</a></li>
                                    @foreach($categories as $category)
                                        <li><a class="brd-rd30" data-filter=".filter-item{{$category->id}}" href="#"
                                               itemprop="url">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul><!-- Filter Buttons -->
                                <div class="filters-inner style2">
                                    <div class="row">
                                        <div class="masonry">
                                            @foreach($recipes as $recipe)
                                                <div class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item{{ $recipe->category->id }}">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                         data-wow-delay="0.2s">
                                                        <div class="featured-restaurant-thumb">
                                                            @if (!$recipe->photos)
                                                                <a href="{{ route('recipes', $recipe->slug) }}" title="{{ $recipe->name }}" itemprop="url"><img
                                                                            class="brd-rd50"
                                                                            src="{{ asset('images/img-logo-grande.png') }}"
                                                                            alt="{{ $recipe->name }}"
                                                                            itemprop="image"></a>
                                                            @else
                                                                <a href="{{ route('recipes', $recipe->slug) }}" title="{{ $recipe->name }}" itemprop="url"><img
                                                                            class="brd-rd50"
                                                                            src="{{ asset('users/images/'. $recipe->user_id . '/receta/260x180-' . $recipe->photos ) }}"
                                                                            alt="{{ $recipe->name }}"
                                                                            itemprop="image"></a>
                                                            @endif
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <h4 itemprop="headline"><a href="{{ route('recipes', $recipe->slug) }}" title="{{ $recipe->name }}"
                                                                                       itemprop="url">{{ $recipe->name }}</a></h4>
                                                            <span class="price"><i
                                                                    class="fa fa-heart" style="color: red"></i> {{ $recipe->likes }}</span>

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

@section('scrip')
    <script>
        $(document).ready(function () {
            var $title, $content;
            var $selector = $('.accordion').selector;
            var $title = $($selector + ' .title');
            var $content = $($selector + ' .text-container');
            var $close = function () {
                $title.removeClass('active');
                $content.slideUp(500).removeClass('open');
            }
            $($selector).find('.title').on('click', function (e) {
                var $idTarget = $(this).data('target');
                var currentAttrValue = $(this).attr('href');
                if ($(e.target).is('.active')) {
                    $($idTarget).css({'display': 'block'});
                    $close();
                } else {
                    $($idTarget).css({'display': 'none'});
                    $close();
                    $(this).addClass('active');
                    $($idTarget).slideDown(400).addClass('open');
                }
                e.preventDefault();
            });
        });
    </script>
@endsection