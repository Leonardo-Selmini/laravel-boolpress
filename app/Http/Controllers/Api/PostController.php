<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(){

    // prendo solo i post pubblicati
    $posts = Post::where("posted", 1)->with("category", "tags")->get();

    // $posts = Post::all();
    return response()->json($posts);
  }


  public function show($slug){
    $post = Post::where("slug", $slug)->with("category", "tags")->first();

    return response()->json($post);
  }
}
