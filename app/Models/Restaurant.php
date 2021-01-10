<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable =[
        "name",
        "area",
        "address",
        "type",
        "ratings",
        "note"
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
