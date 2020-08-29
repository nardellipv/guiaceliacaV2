<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function add(Request $request)
    {
        NewsLetter::create([
            'email' => $request['email'],
        ]);

        toastr()->info('Muchas gracias por darte de alta', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
