<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $posts= Post::all();
        $lasts=Post::orderBy('id','desc')->take(3)->get();
        return view('inicio', compact('posts','lasts'));
    }
}
