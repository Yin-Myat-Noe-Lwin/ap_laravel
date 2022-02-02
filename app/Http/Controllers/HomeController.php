<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      
        $data=Post::All();
        return view('home',compact('data'));
    }

   
}
