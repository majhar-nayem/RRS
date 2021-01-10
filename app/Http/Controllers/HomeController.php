<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $top_restaurants = Restaurant::orderBy('ratings', 'desc')
                                        ->orderBy('rater_no', 'desc')
                                        ->limit(5)->get();

        return view('app', [
            'top_restaurants' => $top_restaurants
        ]);
    }
}
