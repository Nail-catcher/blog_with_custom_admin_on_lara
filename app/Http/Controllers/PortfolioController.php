<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
      public function index()
    {
    	$posts = Post::latest()->where('category_id', '3')->paginate(3);

    	return view('portfolio')->with('posts', $posts);
    }
}
