<div class="col-md-4 col-sm-12 col-lg-4">
    <div class="order-wrapper right wow fadeIn" data-wow-delay="0.2s">
        <div class="order-inner gradient-brd">
            <h4 itemprop="headline">{{ $commerce->name }}</h4>
            <div class="order-list-wrapper">
                <ul class="order-list-inner">
                    <li>
                        <div class="dish-name">
                            <h6 itemprop="headline">Rating</h6>
                        </div>
                        <div class="dish-ingredients">
                            <span class="check-box"><label
                                        for="checkbox1-1"><span>Visitas</span> <i>{{ $commerce->visit }}</i></label></span>
                            <span class="check-box"><label
                                        for="checkbox1-2"><span>Votos positivos</span> <i>{{ $commerce->votes_positive }}</i></label></span>
                        </div>
                    </li>
                    <li style="margin: -30px 30px 30px 30px;">
                        <div class="post-share">
                            <a class="brd-rd2" href="https://facebook.com/sharer/sharer.php?u=https://guiaceliaca.com.ar/blog/{{$commerce->slug}}" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="brd-rd2" href="https://twitter.com/intent/tweet/?text={{ $commerce->title }}.&amp;url=https://guiaceliaca.com.ar/blog/{{$commerce->slug}}" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="brd-rd2" href="https://web.whatsapp.com/send?text={{ $commerce->title }} https://guiaceliaca.com.ar/blog/{{$commerce->slug}}" title="Whatsapp" itemprop="url" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </li>
                </ul>
                <ul class="order-method brd-rd2 red-bg">
                    <li><span>Votos positivos</span> <span class="price">{{ $commerce->votes_positive }}</span></li>
                    <li><a class="brd-rd2" href="{{ route('positive', $commerce->slug) }}" title="" itemprop="url"><i
                                    class="fa fa-thumbs-o-up"></i> ¿Estás conforme?</a></li>
                </ul>
            </div>
        </div>

        <div class="widget style2 popular_posts wow fadeIn" data-wow-delay="0.2s">
            <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Otros locales</h4>
            <div class="widget-data">
                @foreach($randCommerces as $randCommerce)
                    <div class="mini-posts-list">
                        <div class="mini-post-item">
                            <a href="{{ route('name.commerce', $randCommerce->slug) }}" title="" itemprop="url">
                                @if (!$randCommerce->logo)
                                    <img class="brd-rd2" src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                         alt="{{ $randCommerce->name }}" itemprop="image"></a>
                            @else
                                <img class="brd-rd2"
                                     src="{{ asset('users/images/' . $randCommerce->user->id . '/comercio/260x160-'. $randCommerce->logo) }}"
                                     alt="{{ $randCommerce->name }}" itemprop="image"></a>
                            @endif

                            <div class="mini-post-info center-block">
                                <h5 itemprop="headline"><a href="{{ route('name.commerce', $randCommerce->slug) }}"
                                                           title=""
                                                           itemprop="url">{{ $randCommerce->name }}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>