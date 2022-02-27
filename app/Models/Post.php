<?php

namespace App\Models;

use App\Mail\PostStored;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    Protected $table="post";
    //Protected $fillable=['name','description'];
    Protected $guarded=[];

    public function categories()
    {
        //return $this->belongsTo(Post::class);
        return $this->belongsTo('App\Models\Category','category_id');
    }

   /*** protected static function booted()
    {
        static::created(function ($post) {
            Mail::to('lwin@gmail.com')->send(new PostStored($post));
        });
    } ***/
}
