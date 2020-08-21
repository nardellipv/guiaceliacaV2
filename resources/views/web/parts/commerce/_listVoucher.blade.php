<div class="tab-pane fade" id="tab1-2">
    @foreach($promotions as $promotion)
        <div class="dishes-list-wrapper">
            {{--<h4 class="title3" itemprop="headline"><span
                        class="sudo-bottom sudo-bg-red">Pizza</span>
            </h4>--}}
            <ul class="dishes-list">
                <li class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="featured-restaurant-box">
                        <div class="featured-restaurant-thumb">
                            <img
                                    src="{{ asset('users/images/' . $commerce->user->id . '/voucher/'. $promotion->percentage .'-'. $promotion->end_date .'.jpg') }}"
                                    alt="{{ $commerce->name }}"
                                    itemprop="image">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
</div>