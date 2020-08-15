<div class="sidebar left">
    <div class="widget style2 popular_posts wow fadeIn" data-wow-delay="0.2s">
        <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Más Leidos</h4>
        <div class="widget-data">
            <div class="mini-posts-list">
                @foreach($mostRead as $read)
                    <div class="mini-post-item">
                        <a href="{{ url('blog', $read->slug) }}" title=""
                           itemprop="url"><img class="brd-rd2"
                                               src="{{ asset('blog/images/301x160-' .$read->photo) }}"
                                               alt="popular-post-img1.jpg" itemprop="image"></a>
                        <div class="mini-post-info">
                            <h5 itemprop="headline"><a href="{{ url('blog', $read->slug) }}"
                                                       title="" itemprop="url">{{ $read->title }}</a>
                            </h5>
                            <span class="mini-post-data"><i class="fa fa-clock-o"></i> {{ $read->created_at->format('d-M-Y') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
        <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Publicidad</h4>
        <div class="widget-data">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- list Blog -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-7543412924958320"
                 data-ad-slot="8048058673"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>