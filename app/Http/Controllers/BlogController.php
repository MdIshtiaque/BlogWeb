<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        $posts = Post::query()->latest('id')
        ->limit(6)
        ->select(['id', 'title', 'description', 'image', 'creator_name', 'created_at'])
        ->get();

        return view('frontend.pages.home', compact('posts'));
    }

    public function detailes($id)
    {

        dd();
        return view('frontend.pages.blog_detailes');
    }
}
