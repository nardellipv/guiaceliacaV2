<div class="tab-pane fade in active" id="tab1-1">
    @foreach($products as $product)
        <div class="dishes-list-wrapper">
            {{--<h4 class="title3" itemprop="headline"><span
                        class="sudo-bottom sudo-bg-red">Pizza</span>
            </h4>--}}
            <ul class="dishes-list">
                <li class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="featured-restaurant-box">
                        <div class="featured-restaurant-thumb">
                            <a href="#" title="" itemprop="url"><img
                                        src="{{ asset('users/images/' . $product->commerce->user->id . '/producto/100x100-'. $product->photo) }}"
                                        alt="{{ $product->name }}"
                                        itemprop="image"></a>
                        </div>
                        <div class="featured-restaurant-info">
                            <h4 itemprop="headline"><a href="#"
                                                       title=""
                                                       itemprop="url">{{ $product->name }}</a>
                            </h4>
                            <span class="price">${{ $product->price }}</span>
                            <p itemprop="description">{!! $product->description !!}</p>
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-tags"></i>
                                    {{ $product->category->name }}
                                </li>
                                {{--<li>
                                    <i class="flaticon-transport"></i>
                                    30min
                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
</div>