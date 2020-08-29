<?php

namespace App\Http\Controllers\AdminClient;

use App\Message;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function messageRead($id)
    {
        $message = Message::where('id', $id)
            ->first();

        $message->read = 'YES';
        $message->save();

        return view('web.parts.adminClient.profile._replyMessage', compact('message'));
    }

    public function messageDelete($id)
    {
        $message = Message::find($id);
        $message->delete();

        toastr()->success('Mensaje Eliminado', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
