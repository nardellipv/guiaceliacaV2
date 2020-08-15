<section>
    <div class="block gray-bg bottom-padd210">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="title1-wrapper text-center">
                        <div class="title1-inner">
                            <span>Mantente actualizado en el mundo celíaco</span>
                            <h2 itemprop="headline">Últimas noticias</h2>
                        </div>
                    </div>
                    <div class="remove-ext margn-btm">
                        <div class="row">
                            @foreach($lastNews as $lastNew)
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="news-box wow fadeIn" data-wow-delay="0.2s">
                                        <div class="news-thumb">
                                            <a class="brd-rd2" href="{{ route('post.blog', $lastNew->slug) }}" title=""
                                               itemprop="url"><img
                                                        src="{{ asset('blog/images/384x255-' .$lastNew->photo) }}"
                                                        alt="{{ $lastNew->title }}" itemprop="image"></a>
                                            <div class="news-btns">
                                                <a class="post-date red-bg"
                                                   href="{{ route('post.blog', $lastNew->slug) }}" title=""
                                                   itemprop="url">{{ $lastNew->created_at->format('M d') }}</a>
                                                <a class="read-more" href="{{ route('post.blog', $lastNew->slug) }}"
                                                   itemprop="url">Leer más</a>
                                            </div>
                                        </div>
                                        <div class="news-info">
                                            <h4 itemprop="headline"><a href="{{ route('post.blog', $lastNew->slug) }}"
                                                                       title=""
                                                                       itemprop="url">{{ $lastNew->title }}</a></h4>
                                            <p itemprop="description">{!! Str::limit($lastNew->body, 150) !!}</p>
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
</section>