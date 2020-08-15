<?php

namespace App\Http\Controllers;

use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use App\Recipe;

class RecipeController extends Controller
{
    public function listRecipes()
    {
        $recipes = Recipe::with(['category'])
            ->orderBy('created_at', 'DESC')
            ->get();

        $categories = Category::all();

        return view('web.parts.recipe._listRecipes', compact('recipes','categories'));
    }

    public function recipes($slug)
    {
        $recipe = Recipe::where('slug', $slug)
            ->first();

        return view('web.parts.recipe._recipe', compact('recipe'));
    }

    public function recipeLike($id)
    {
        Recipe::where('id', $id)
            ->increment('likes',1);

        Toastr::info('Muchas gracias por tu voto', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
