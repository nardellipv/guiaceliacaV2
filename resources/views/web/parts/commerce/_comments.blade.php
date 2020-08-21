<div class="tab-pane fade in active" id="tab1-3">
    <div class="customer-review-wrapper">
        <h4 class="title3" itemprop="headline"><span
                    class="sudo-bottom sudo-bg-red">Comentarios</span> de
            otros usuarios</h4>
        <ul class="comments-thread customer-reviews">
            @forelse($comments as $comment)
                <li>
                    <div class="comment">
                        <div class="comment-info">
                            <h4 itemprop="headline">
                                {{ $comment->name }}
                            </h4>
                            <h6> {{ $comment->created_at->format('d/m/Y') }}</h6>
                            <p itemprop="description" style="max-width: 100%;">{{ $comment->message }}</p>
                        </div>
                    </div>
                </li>
            @empty
                <h6 style="margin-bottom: 5%">Este local no posee ningún comentario. Se el
                    primero en opinar.</h6>
            @endforelse
        </ul>
        <div class="your-review">
            <h4 class="title3" itemprop="headline"><span
                        class="sudo-bottom sudo-bg-red">Dejar</span>
                un comentario sobre el local.</h4>
            @if(Auth::check())
                <form class="review-form" method="post" action="{{ route('add.commentCommerce', $commerce->slug) }}">
                    @csrf
                    <textarea class="brd-rd5" name="text-message"></textarea>
                    <button class="brd-rd2 red-bg" type="submit">
                        Enviar comentario
                    </button>
                </form>
            @else
                <h6>Necesita estar logueado para poder dejar comentarios.</h6>
                <a class="log-popup-btn" href="#" title="Login" itemprop="url">Ingresar</a>
                <a href="{{ url('register') }}" type="button"
                   class="btn btn-reverse btn-xs">Registrarse</a>
            @endif
        </div>
    </div>
</div>