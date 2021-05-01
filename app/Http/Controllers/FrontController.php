<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.front.index');
    }

    public function post()
    {
        $post = Post::all();
        return view('pages.front.post', compact('post'));
    }
}
