<section>
    <div class="block blackish low-opacity">
        <div class="fixed-bg" style="background-image: url({{ asset('styleWeb/assets/images/parallax1.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="title1-wrapper text-center">
                        <div class="title1-inner">
                            <span>Mayor cantidad de visitas y votos</span>
                            <h2 class="text-white" itemprop="headline">Negocios Destacados</h2>
                        </div>
                    </div>
                    <div class="remove-ext text-center">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="featured-restaurant-thumb">
                                        @if (!$ratingVote->logo)
                                            <img src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                                 alt="{{ $ratingVote->name }}" itemprop="image">
                                        @else
                                            <img class="brd-rd50"
                                                 src="{{ asset('users/images/' . $ratingVote->user->id . '/comercio/358x250-'. $ratingVote->logo) }}"
                                                 alt="{{ $ratingVote->name }}"
                                                 itemprop="image">
                                        @endif

                                    </div>
                                    <div class="featured-restaurant-info">
                                                    <span class="red-clr">{{ $ratingVote->province->name }}
                                                        - {{ $ratingVote->address }}</span>
                                        <h4 class="yellow-clr" itemprop="headline"><a
                                                    href="{{ route('name.commerce', $ratingVote->slug) }}"
                                                    title=""
                                                    itemprop="url">{{ $ratingVote->name }}</a>
                                        </h4>
                                        <em class="yellow-clr"> {{ Str::limit($ratingVote->about, 75)  }}</em><br>
                                        <div class="restaurant-info">
                                            <h4 class="text-center yellow-clr" itemprop="headline">Mayor cantidad de votos positivos</h4>
                                        </div>
                                        <a class="brd-rd5 block text-center"
                                           href="{{ route('name.commerce', $ratingVote->slug) }}"
                                           title="Order Online">Ir al comercio</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                    <div class="featured-restaurant-thumb">
                                        @if (!$ratingVisit->logo)
                                            <img src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                                 alt="{{ $ratingVisit->name }}" itemprop="image">
                                        @else
                                            <img class="brd-rd50"
                                                 src="{{ asset('users/images/' . $ratingVisit->user->id . '/comercio/358x250-'. $ratingVisit->logo) }}"
                                                 alt="{{ $ratingVisit->name }}"
                                                 itemprop="image">
                                        @endif

                                    </div>
                                    <div class="featured-restaurant-info">
                                                    <span class="red-clr">{{ $ratingVisit->province->name }}
                                                        - {{ $ratingVisit->address }}</span>
                                        <h4 class="yellow-clr" itemprop="headline"><a
                                                    href="{{ route('name.commerce', $ratingVisit->slug) }}"
                                                    title=""
                                                    itemprop="url">{{ $ratingVisit->name }}</a>
                                        </h4>
                                        <em class="yellow-clr"> {{ Str::limit($ratingVisit->about, 75)  }}</em><br>
                                        <div class="restaurant-info">
                                            <h4 class="text-center yellow-clr" itemprop="headline">Mayor cantidad de visitas</h4>
                                        </div>
                                        <a class="brd-rd5 block text-center"
                                           href="{{ route('name.commerce', $ratingVisit->slug) }}"
                                           title="Order Online">Ir al comercio</a>
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