<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        if (Auth::check()){
            $data['user_id'] = Auth::id();
        }
        Post::create($data);

        return redirect()->route('home')
            ->with([
                'message' => "Post Saved Successfully!"
            ]);
    }
}
