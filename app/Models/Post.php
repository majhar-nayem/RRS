<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =[
        "comment",
        "image",
        "restaurant_id",
        "ratings",
        "like"
    ];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
