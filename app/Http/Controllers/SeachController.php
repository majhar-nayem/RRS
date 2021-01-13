<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class SeachController extends Controller
{
    public function index(Request $request){
        $restaurants = Restaurant::where('name', 'LIKE', "%{$request->value}%")
            ->orWhere('area', 'LIKE', "%{$request->value}%")
            ->orWhere('type', 'LIKE', "%{$request->value}%")
            ->orWhere('address', 'LIKE', "%{$request->value}%")->get();

        return view('search', [
            'restaurants' => $restaurants
        ]);
    }
}
