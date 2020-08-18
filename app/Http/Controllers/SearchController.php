<?php

namespace App\Http\Controllers;

use App\Commerce;
use App\Province;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filterProvince($slug)
    {
        $province = Province::where('slug', $slug)
            ->first();

        $searching = Commerce::with(['user','province'])
            ->where('province_id', $province->id)
            ->get();

        $provinces = Province::all();

        return view('web.parts.searching._searchCommerce', compact('searching','provinces'));
    }

    public function filterCommerce(Request $request)
    {
        $keyword = $request->keywords;

        $searching = Commerce::with(['user','province'])
            ->where('name', 'LIKE', "%$keyword%")
            ->get();

        return view('web.parts.searching._searchCommerce', compact('searching','keyword'));
    }
}
