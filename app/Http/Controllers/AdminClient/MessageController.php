<?php

namespace App\Http\Controllers\AdminClient;

use Brian2694\Toastr\Facades\Toastr;
use App\Commerce;
use App\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function messageList()
    {
        $commerce = Commerce::where('user_id', Auth::user()->id)
            ->first();

        $messages = Message::where('commerce_id', $commerce->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('web.parts.adminClient.message._listMessage', compact('messages'));
    }

    public function messageRead($id)
    {
        $message = Message::where('id', $id)
            ->first();

        $message->read = 'YES';
        $message->save();

        return view('web.parts.adminClient.message._readMessage', compact('message'));
    }

    public function messageDelete($id)
    {
        $message = Message::find($id);
        $message->delete();

        Toastr::success('Mensaje Eliminado', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
