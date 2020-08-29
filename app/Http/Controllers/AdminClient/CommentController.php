<?php

namespace App\Http\Controllers\AdminClient;

use App\Comment;
use App\Commerce;
use App\Http\Controllers\Controller;
use App\Mail\complaintMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function commentList()
    {
        $commerce = Commerce::where('user_id', Auth::user()->id)
            ->first();

        $comments = Comment::where('commerce_id', $commerce->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        return view('web.parts.adminClient.comment._listComment', compact('comments'));
    }

    public function commentReport($id)
    {
        $comment = Comment::find($id);
        $comment->status = 'DESACTIVE';
        $comment->save();

        Mail::to('info@guiaceliaca.com.ar')->send(new complaintMessage($comment));

        toastr()->success('Mensaje reportado. Se revisará el mensaje y actuaremos en consecuencia', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
