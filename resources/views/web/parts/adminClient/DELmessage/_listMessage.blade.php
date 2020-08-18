@extends('layouts.main')


@section('content')
    <div class="tab-pane fade" id="messages">
        <div class="tabs-wrp brd-rd5">
            <h4 itemprop="headline">Listado Mensajes</h4>
            <div class="statement-table">
                <table>
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td><a href="{{ route('message.read', $message) }}">{{ Str::limit($message->name,30) }}</a> </td>
                            <td class="hidden-xs">{{ Str::limit($message->messageText, 50) }}</td>
                            <td class="hidden-xs">{{ $message->created_at->format('d/m/Y') }}</td>
                            @if($message->read == 'YES')
                                <td><span class="label label-success">Leído</span></td>
                            @else
                                <td><span class="label label-danger">No Leído</span></td>
                            @endif
                            <td><a href="{{ route('message.delete', $message) }}"><i class="icon fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- Statement Table -->
            <div class="pagination-wrapper text-center style2">
                <ul class="pagination justify-content-center">
                    <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                    <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                    <li class="page-item">........</li>
                    <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                    <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                </ul>
            </div><!-- Pagination Wrapper -->
        </div>
    </div>
@endsection