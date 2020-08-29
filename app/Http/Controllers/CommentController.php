<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Commerce;
use App\Http\Requests\CommentToCommerceRequest;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(CommentToCommerceRequest $request, $slug)
    {
        $commerce = Commerce::where('slug', $slug)
            ->first();

        $user = Auth::user();

        Comment::create([
            'name' =>  $user->name,
            'email' =>  $user->email,
            'message' =>  $request['text-message'],
            'commerce_id' => $commerce->id
        ]);

        toastr()->success('Comentario ingresado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
