<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $top_restaurants = Restaurant::orderBy('ratings', 'desc')
                                        ->orderBy('rater_no', 'desc')
                                        ->limit(5)->get();
        $restaurants = Restaurant::all();
        $posts = Post::with(['user','restaurant'])->latest()->get();

        return view('home', [
            'top_restaurants' => $top_restaurants,
            'restaurants' =>$restaurants,
            'posts' => $posts
        ]);
    }
}
