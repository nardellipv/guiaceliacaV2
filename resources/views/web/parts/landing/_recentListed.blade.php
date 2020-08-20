<section>
    <div class="block white-bg top-padd140">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="filters-wrapper">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <span>Siguen confiando en Guía Celíaca</span>
                                <h2 itemprop="headline">Últimos locales registrados</h2>
                            </div>
                        </div>

                        <div class="filters-inner style2">
                            <div class="row">
                                <div class="masonry">
                                    @foreach($commercesLastRegister as $commerceLast)
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                                <div class="featured-restaurant-thumb">
                                                    @if (!$commerceLast->logo)
                                                        <img id="profile-display"
                                                             src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                                             alt="{{ $commerceLast->name }}" itemprop="image">
                                                    @else
                                                        <img class="brd-rd50"
                                                             src="{{ asset('users/images/' . $commerceLast->user->id . '/comercio/358x250-'. $commerceLast->logo) }}"
                                                             alt="{{ $commerceLast->name }}"
                                                             itemprop="image">
                                                    @endif
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">{{ $commerceLast->province->name }}
                                                        - {{ $commerceLast->address }}</span>
                                                    <h4 itemprop="headline"><a
                                                                href="{{ route('name.commerce', $commerceLast->slug) }}"
                                                                title=""
                                                                itemprop="url">{{ $commerceLast->name }}</a>
                                                    </h4>
                                                    <em> {{ Str::limit($commerceLast->about, 75)  }}</em><br>
                                                    <a class="brd-rd5"
                                                       href="{{ route('name.commerce', $commerceLast->slug) }}"
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
</section>