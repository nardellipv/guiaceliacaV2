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
                            @if($product->photo)
                                <img src="{{ asset('users/images/' . $product->commerce->user->id . '/producto/100x100-'. $product->photo) }}"
                                     alt="{{ $product->name }}"
                                     itemprop="image">
                            @else
                                <img src="{{ asset('styleWeb/assets/images/img-logo.png') }}"
                                     alt="{{ $product->name }}"
                                     itemprop="image">
                            @endif
                        </div>
                        <div class="featured-restaurant-info">
                            <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{ $product->name }}</a></h4>
                            <span class="price">${{ $product->price }}</span>
                            <p itemprop="description">{{ $product->description }}</p>
                            <ul class="post-meta">
                                <li><i class="fa fa-check-circle-o"></i>{{ $product->category->name }}</li>
                                {{--<li><i class="flaticon-transport"></i> 30min</li>--}}
                            </ul>
                        </div>
                        <div class="ord-btn">
                            @if($product->commerce->phoneWsp)
                                <a class="brd-rd2"
                                   href="https://web.whatsapp.com/send?phone=549{{ $product->commerce->phoneWsp }}&text=Hola%2C%20te%20escribo%20por%20tu%20producto%20{{ $product->name }}%20publicado%20en%20guiaceliaca.com.ar%20Link-%3E%20%20https://guiaceliaca.com.ar/{{ $commerce->slug }}"
                                   title="Preguntar por el producto" itemprop="url" target="_blank"><i
                                            class="fa fa-whatsapp fa-2x"></i></a>
                            @endif
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
</div>