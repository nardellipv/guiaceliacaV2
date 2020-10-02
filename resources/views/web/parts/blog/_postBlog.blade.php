@extends('layouts.main')

@section('title', 'Post ' . $post->title)

@section('meta-description', '✍ Noticia sobre ' . $post->title)

@section('og:url', 'https://guiaceliaca.com.ar/blog/' . $post->slug)
@section('og:title', $post->title)
@section('og:image', 'https://guiaceliaca.com.ar/blog/images/301x160-' . $post->photo)

@section('content')
    <section>
        <div class="block less-spacing gray-bg top-padd30">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-box">
                            <div class="col-md-9 col-sm-12 col-lg-9">
                                
                                @if (!Request()->cookie('login'))
                                    @include('web.parts._registerIndex')
                                @endif

                                <div class="blog-detail-wrapper">
                                    <div class="blog-detail-thumb wow fadeIn" data-wow-delay="0.2s">
                                        <img src="{{ asset('blog/images/787x255-' . $post->photo) }}"
                                            alt="{{ $post->title }}" itemprop="image">
                                    </div>
                                    <div class="blog-detail-info">
                                        <span class="post-detail-date red-clr"><i class="fa fa-clock-o"></i>
                                            {{ $post->created_at->format('d') }}
                                            {{ $post->created_at->format('M') }}</span>
                                        <div class="post-meta">
                                            <span><i class="fa fa-eye red-clr"></i> 95 Views</span>
                                            <span><i class="fa fa-comment-o red-clr"></i> 5 Comments</span>
                                        </div>
                                    </div>
                                    <h1 itemprop="headline">{{ $post->title }}</h1>
                                    <p itemprop="description">{!! $post->body !!}</p>
                                    <div class="post-share">
                                        <span>Compartir:</span>
                                        <a class="brd-rd2"
                                            href="https://facebook.com/sharer/sharer.php?u=https://guiaceliaca.com.ar/blog/{{ $post->slug }}"
                                            title="Facebook" itemprop="url" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                        <a class="brd-rd2"
                                            href="https://twitter.com/intent/tweet/?text={{ $post->title }}.&amp;url=https://guiaceliaca.com.ar/blog/{{ $post->slug }}"
                                            title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a class="brd-rd2"
                                            href="https://web.whatsapp.com/send?text={{ $post->title }} https://guiaceliaca.com.ar/blog/{{ $post->slug }}"
                                            title="Whatsapp" itemprop="url" target="_blank"><i
                                                class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                @include('web.parts.blog._commentBlog')
                            </div>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="sidebar right">
                                    @include('web.parts.blog._asideBlog')
                                </div>
                                <!--Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
