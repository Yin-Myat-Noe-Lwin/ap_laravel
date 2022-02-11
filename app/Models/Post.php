<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
