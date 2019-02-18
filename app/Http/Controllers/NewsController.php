<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
      public function index()
    {
    	$posts = Post::latest()->where('category_id', '1')->paginate(3);

    	return view('news')->with('posts', $posts);
    }
}
