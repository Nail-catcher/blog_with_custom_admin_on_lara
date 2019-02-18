<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class ReportController extends Controller
{
      public function index()
    {
    	$posts = Post::latest()->where('category_id', '2')->paginate(3);

    	return view('report')->with('posts', $posts);
    }
}