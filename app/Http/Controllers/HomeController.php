<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Commerce;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function index()
    {
        $commercesLastRegister = Commerce::with(['user', 'province'])
            ->where('created_at', '>=', Date::parse('-30 days'))
            ->get();


        $commercesListed = Commerce::with(['user', 'province'])
            ->inRandomOrder()
            ->get();

        /*$commercesPro = Commerce::with(['user', 'province'])
            ->where('type', 'PREMIUM')
            ->get();*/

        $lastNews = Blog::orderBy('created_at', 'DESC')
            ->where('status', 'ACTIVE')
            ->take(3)
            ->get();

        $ratingVote = Commerce::orderBy('votes_positive', 'desc')
            ->whereRaw('votes_positive -  votes_negative')
            ->first();

        $ratingVisit = Commerce::orderBy('visit', 'DESC')
            ->first();

        $countProvince = Commerce::with(['province'])
            ->groupBy('province_id')
            ->get();

//        $provinces = Province::all();

//        $characteristics = Characteristic::all();

//        $payments = Payment::all();

        return view('web.index', compact('commercesLastRegister', 'lastNews',
            'ratingVisit', 'ratingVote', 'commercesListed', 'countProvince'));
    }
}
