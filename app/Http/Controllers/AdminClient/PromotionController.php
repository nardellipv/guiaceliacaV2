<?php

namespace App\Http\Controllers\AdminClient;

use App\Commerce;
use App\Http\Controllers\Controller;
use App\Http\Requests\PromotionCreateRequest;
use App\Picture;
use App\Promotion;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;

class PromotionController extends Controller
{

    public function storePromotion(PromotionCreateRequest $request)
    {
        $commerceId = Commerce::where('user_id', Auth::user()->id)
            ->first();

        $img = Image::make('styleWeb/assets/images/ticket.jpg');

        $img->text($request->name, 200, 45, function ($font) {
            $font->file('styleWeb/assets/fonts/sixty.TTF');

            $font->size(35);

            $font->color('#fff000');

            $font->align('center');

            $font->angle(0);

        });

        $img->text($request->text, 190, 75, function ($font) {
            $font->file('styleWeb/assets/fonts/sixty.TTF');

            $font->size(20);

            $font->color('#fff000');

            $font->align('center');

            $font->angle(0);

        });

        if($request->percentage != NULL) {
            $img->text($request->percentage . '%', 200, 145, function ($font) {
                $font->file('styleWeb/assets/fonts/stereofidelic.ttf');

                $font->size(60);

                $font->color('#fff000');

                $font->align('center');

                $font->angle(0);

            });
        }

        $img->text("Válida " . Carbon::parse($request->end_date)->format('d/m/Y'), 150, 175, function ($font) {
            $font->file('styleWeb/assets/fonts/yellow.otf');

            $font->size(20);

            $font->color('#fff000');

            $font->align('center');

            $font->angle(0);

        });

        $path = 'users/images/' . $commerceId->user_id;
        $pathSub = 'users/images/' . $commerceId->user_id . '/voucher';

        if (!is_dir($path)) {
            mkdir('users/images/' . $commerceId->user_id . '/voucher');
        }
        if (!is_dir($pathSub)) {
            mkdir('users/images/' . $commerceId->user_id . '/voucher');
        }

        $picture = $request->percentage . '-' . $request->end_date;
        $img->save($pathSub . '/' . $picture . '.jpg');

        $imageID = Picture::create([
            'name' => $picture . '.jpg',
            'user_id' => Auth::user()->id,
        ]);

        Promotion::create([
            'name' => $request['name'],
            'text' => $request['text'],
            'percentage' => $request['percentage'],
            'end_date' => $request['end_date'],
            'picture_id' => $imageID->id,
            'commerce_id' => $commerceId->id,
        ]);

        toastr()->success('Promoción creada correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }

    public function deletePromotion($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();

//        elimino archivo
        $path = 'users/images/' . Auth::user()->id . '/voucher/' . $promotion->percentage . '-' . $promotion->end_date . '.jpg';
        file::delete($path);

        toastr()->success('Promoción Eliminada', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
