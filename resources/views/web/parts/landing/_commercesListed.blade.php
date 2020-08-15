<section>
    <div class="block grayish low-opacity ">
        <div class="fixed-bg" style="background-image: url({{ asset('styleWeb/assets/images/pattern.png') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="filters-wrapper">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <span>Locales cerca de tu zona</span>
                                <h2 itemprop="headline">Locales celíacos registrados</h2>
                            </div>
                        </div>
                        <ul class="filter-buttons center ext-btm20">
                            <li class="active"><a class="brd-rd30" data-filter="*" href="#" itemprop="url">Todos</a>
                            </li>
                            @foreach($countProvince as $countProv)
                                <li><a class="brd-rd30" data-filter=".filter-item{{ $countProv->province->id }}"
                                       href="#"
                                       itemprop="url">{{ $countProv->province->id == '2' ? 'CABA' : $countProv->province->name }}</a>
                                </li>
                            @endforeach
                        </ul><!-- Filter Buttons -->
                        <div class="filters-inner">
                            <div class="row">
                                <div class="masonry">
                                    @foreach($commercesListed as $commerceList)
                                        <div class="col-md-6 col-sm-6 col-lg-6 filter-item filter-item{{ $commerceList->province->id }}">
                                            <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn"
                                                 data-wow-delay="0.1s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="{{ route('name.commerce', $commerceList->slug) }}" title=""
                                                       itemprop="url">
                                                        @if (!$commerceList->logo)
                                                            <img src="{{ asset('images/img-logo-grande.png') }}"
                                                                 alt="{{ $commerceList->name }}" itemprop="image">
                                                        @else
                                                            <img src="{{ asset('users/images/' . $commerceList->user->id . '/comercio/358x250-'. $commerceList->logo) }}"
                                                                 alt="{{ $commerceList->name }}" itemprop="image">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">{{ $commerceList->province->name }}
                                                        - {{ $commerceList->address }}</span>
                                                    <h4 itemprop="headline"><a
                                                                href="{{ route('name.commerce', $commerceList->slug) }}"
                                                                title=""
                                                                itemprop="url">{{ $commerceList->name }}</a></h4>
                                                    <span class="food-types">Sobre nosotros:
                                                        <em class="yellow-clr">{{ Str::limit($commerceList->about, 100)  }}</em>
                                                    </span>
                                                    {{--<ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                        <li><i class="flaticon-transport"></i> 30min</li>
                                                        <li><i class="flaticon-money"></i> Accepts cash & online
                                                            payments
                                                        </li>
                                                    </ul>--}}
                                                    <span class="post-likes style2 red-clr"><i
                                                                class="fa fa-heart-o"></i> {{ $commerceList->votes_positive }}</span>
                                                    <a class="brd-rd5"
                                                       href="{{ route('name.commerce', $commerceList->slug) }}"
                                                       title="Order Online">Ir al comercio</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- Filters Wrapper -->
                </div>
            </div>
        </div>
    </div>
</section>