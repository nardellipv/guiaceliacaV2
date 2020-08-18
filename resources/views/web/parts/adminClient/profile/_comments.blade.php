<div class="tab-pane fade" id="comments">
    <div class="tabs-wrp brd-rd5">
        <h4 itemprop="headline">Listado de comentarios</h4>
        <div class="booking-table">
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ Str::limit($comment->name,30) }}</td>
                        <td>{{ $comment->message }}</td>
                        <td>{{ $comment->created_at->format('d/m/Y') }}</td>
                        @if($comment->status == 'ACTIVE')
                            <td><span class="label label-success">Activo</span></td>
                            <td><a href="{{ route('comment.report', $comment) }}"><span
                                            class="label label-info">Denunciar</span></a></td>
                        @else
                            <td><span class="label label-danger">Desactivo</span></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>