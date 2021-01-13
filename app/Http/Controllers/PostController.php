<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
           'comment' => 'required',
           'restaurant_id' => 'required',
           'ratings' => 'required',
        ]);
        $data = $request->all();
        if (Auth::check()){
            $data['user_id'] = Auth::id();
        }
        Post::create($data);

        $res = Restaurant::find($request->restaurant_id);
        $rating = round( (($res->ratings*$res->rater_no)+ $request->ratings)/($res->rater_no + 1), 2 );
        $res->update([
           'ratings' =>$rating,
            'rater_no' => ++$res->rater_no,
        ]);

        return redirect()->route('home')
            ->with([
                'message' => "Post Saved Successfully!"
            ]);
    }
}
