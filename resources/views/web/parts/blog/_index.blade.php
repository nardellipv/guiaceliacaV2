@extends('layouts.main')

@section('title', '📰 Noticias de interés en temas celíacos')

@section('meta-description','👉 Enterate de lo último en temas de celiaquia. Publicamos contenido semanalmente estes actualizados constantemente.')

@section('content')
    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-box">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                @include('web.parts.blog._asideBlog')
                            </div>
                            <div class="col-md-9 col-sm-12 col-lg-9">
                                <div class="remove-ext">
                                    <div class="row">
                                        @foreach($posts as $post)
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="news-box wow fadeIn" data-wow-delay="0.1s">
                                                    <div class="news-thumb">
                                                        <a class="brd-rd2" href="{{ url('blog', $post->slug) }}"
                                                           title="" itemprop="url"><img
                                                                    src="{{ asset('blog/images/360x239-' .$post->photo) }}"
                                                                    alt="{{ $post->title }}" itemprop="image"></a>
                                                        <div class="news-btns">
                                                            <a class="post-date red-bg" href="#" title=""
                                                               itemprop="url">{{ $post->created_at->format('d') }}
                                                                {{ $post->created_at->format('M') }}</a>
                                                            <a class="read-more" href="{{ url('blog', $post->slug) }}"
                                                               itemprop="url">READ MORE</a>
                                                        </div>
                                                    </div>
                                                    <div class="news-info">
                                                        <h4 itemprop="headline"><a href="{{ url('blog', $post->slug) }}"
                                                                                   title="" itemprop="url">{{ Str::limit($post->title, 75) }}</a></h4>
                                                        <p itemprop="description">{!! Str::limit($post->body,150) !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pagination-wrapper text-center">
                                    <ul class="pagination center-block">
                                        {!! $posts->render() !!}
                                    </ul>
                                </div><!-- Pagination Wrapper -->
                            </div>
                        </div>
                    </div><!-- Section Box -->
                </div>
            </div>
        </div>
    </section>
@endsection

