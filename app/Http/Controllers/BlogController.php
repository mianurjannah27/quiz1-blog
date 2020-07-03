<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Post;
class BlogController extends Controller
{
    public function index(Photo $post ){
    	$data = $post->orderBy('created_at','desc')->get();
    	return view('blog', compact('data'));
    }
    
}
