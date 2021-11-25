<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $guarded = ['id'];
    protected $fillable = ['title','excerpt','body'];
    // public function getRouteKey()
    // {
    //     return 'slug';    //no need to do post:slug for route model binding
    // }
 protected $with = ['category','author'];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

   
}
