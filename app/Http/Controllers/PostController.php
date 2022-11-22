<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{

    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' category: ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' author: ' . $author->name;
        }

        return view('posts', [
            "title" => " All Books" . $title,
            "active" => 'post',
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => 'post',
            "post" => $post
        ]);
    }

}
