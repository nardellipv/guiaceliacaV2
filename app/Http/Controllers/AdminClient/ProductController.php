<?php

namespace App\Http\Controllers\AdminClient;

use Brian2694\Toastr\Facades\Toastr;
use App\Category;
use App\Commerce;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    public function productIndex()
    {
        $categories = Category::all();

        return view('web.parts.adminClient.product._product', compact('categories'));
    }

    public function productCreate(ProductCreateRequest $request)
    {
        $commerceId = Commerce::where('user_id', Auth::user()->id)
            ->first();

        $commerce = Product::create([
            'name' => $request['name'],
            'category_id' => $request['category_id'],
            'description' => $request['description'],
            'price' => $request['price'],
            'commerce_id' => $commerceId->id
        ]);


        $path = 'users/images/' . $commerceId->user_id;
        $pathSub = 'users/images/' . $commerceId->user_id . '/producto';

        if (!is_dir($path)) {
            mkdir('users/images/' . $commerceId->user_id);
        }
        if (!is_dir($pathSub)) {
            mkdir('users/images/' . $commerceId->user_id . '/producto');
        }

        if ($request->photo) {
            $image = $request->file('photo');
            $input['photo512'] = '512x512-' . $commerceId->user_id . '-' . $image->getClientOriginalName();
            $input['photo100'] = '100x100-' . $commerceId->user_id . '-' . $image->getClientOriginalName();

            $img = Image::make($image->getRealPath());
            $img->fit(512, 512)->save($path . '/producto/' . $input['photo512']);
            $img->fit(100, 100)->save($path . '/producto/' . $input['photo100']);

            $commerce->photo = Str::after($input['photo512'], '-');
        }

        $commerce->save();

        Toastr::success('Producto creado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function pausedDeleteAction($id)
    {
        $product = Product::find($id);
        $product->delete();

        Toastr::success('Producto Eliminado', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
