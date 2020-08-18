<div class="tab-pane fade" id="messages">
    <div class="tabs-wrp brd-rd5">
        <h4 itemprop="headline">Listado de mensajes</h4>
        <div class="review-list">
            @foreach($messages as $message)
                <form method="post" action="{{ route('respondToClient') }}">
                    @csrf
                    <div class="review-box brd-rd5">
                        <h4 itemprop="headline">{{ Str::limit($message->name,30) }}</h4> <span><a href="{{ route('message.delete', $message) }}"><i class="icon fa fa-trash" style="color: red"></i></a></span>
                        <br>
                        <p itemprop="description">{{ $message->messageText }}</p>
                        <br><br>
                        <label class="text-muted">Responder </label>
                        <textarea class="brd-rd4" id="about" style="width: 100%" name="description"
                                  placeholder="Responder al usuario"></textarea>
                        <button type="submit" class="btn-link"><i class="fa fa-reply"></i> Enviar Respuesta</button>
                        <div class="review-info">
                            <div class="review-info-inner">
                                @if($message->read == 'YES')
                                    <td><span class="label label-success">Respondido</span></td>
                                @else
                                    <td><span class="label label-danger">No Respondido</span></td>
                                @endif
                                <i class="red-clr"> {{ $message->created_at->format('d/m/Y') }}</i>
                            </div>
                        </div>
                        <input name="clientMail" value="{{ $message->email }}" hidden readonly>
                        <input name="name" value="{{ $message->name }}" hidden readonly>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>