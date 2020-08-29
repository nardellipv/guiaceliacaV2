<?php

namespace App\Http\Controllers\Admin;

use App\NewsLetter;
use App\Http\Controllers\Controller;

class AdminNewsLetterController extends Controller
{
    public function listNewsLetter()
    {
        $newsLetters = NewsLetter::all();

        return view('admin.parts.newsLetter._listNewsLetter', compact('newsLetters'));
    }

    public function deleteNewsLetter($id)
    {
        $newsLetter = NewsLetter::find($id);
        $newsLetter->delete();

        toastr()->success('NewsLetter Eliminado Correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
