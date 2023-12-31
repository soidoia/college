<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
        {
            return view('posts.index')->with(['posts' => $post->getpaginateByLimit(1)]);
        }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['posts' => $post]);
        
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function create()
    {
        return view('posts.create');
    }
}

?>