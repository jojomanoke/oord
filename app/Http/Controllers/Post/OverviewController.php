<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class OverviewController extends Controller
{
    public function index(Request $request, $query, $user_id = null){
        if($query != 'All' && !isset($user_id)){
            $posts = Post::where('subject', $query)->get();
        }
        elseif($query != 'All' && isset($user_id)){
            $posts = Post::where(['subject' => $query, 'user_id' => $user_id])->get();
        }
        elseif(isset($user_id) && $query == 'All'){
            $posts = Post::where('user_id', $user_id);
        }
        else{
            $posts = Post::all();
        }

        return view('posts.overview')->with('posts', $posts);
    }
}
