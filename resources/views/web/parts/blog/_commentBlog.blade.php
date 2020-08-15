<div class="comments-wrapper">
    <h3 class="title4" itemprop="headline"><span
                class="sudo-bottom sudo-bg-red">Comentarios</span> {{ $countCommentBlog }}</h3>
    <ul class="comments-thread">
        <li>
            <div class="comment">
                @foreach($commentsPost as $commentPost)
                    @if (!$commentPost->user->picture)
                        <img class="brd-rd50" src="{{ asset('images/img-logo-grande.png') }}" alt="guiaceliaca">
                    @else
                        <img class="brd-rd50"
                             src="{{ asset('users/images/' . $commentPost->user->id . '/perfil/512x512-'. $commentPost->user->picture) }}"
                             alt="guiaceliaca">
                    @endif
                    <div class="comment-info">
                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{ $commentPost->user->name }}</a>
                        </h4>
                        <i>{{ $commentPost->created_at->diffForHumans() }}</i><br>
                        <p itemprop="description">{{ $commentPost->message }}</p>
                    </div>
                @endforeach
            </div>
        </li>
    </ul>
</div>
<div class="leav-comment-wrapper">
    <h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Dejar</span> un comentario</h3>
    @if(Auth::check())
        <form class="reply-form">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <input class="brd-rd2" type="text" placeholder="Name">
                </div>
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <input class="brd-rd2" type="email" placeholder="Email">
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4">
                    <input class="brd-rd2" type="text" placeholder="Subject">
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <textarea class="brd-rd2" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <button class="brd-rd3 red-bg" type="submit">SUBMIT NOW</button>
                </div>
            </div>
        </form>
    @else
        <h6>Necesita estar logueado para poder dejar comentarios.</h6>
        <div class="ord-btn">
            <a class="brd-rd40" href="{{ url('login') }}" title="Ingresar" itemprop="url">Ingresar</a>
        </div>
    @endif
</div>