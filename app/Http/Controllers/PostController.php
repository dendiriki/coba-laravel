<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title ='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' in '. $author->name;
        }

        return view('posts', [
            "title" => "All Posts ". $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {


        // $new_post = [];
        //  foreach ($blog_posts as $post ) {
        //     if($post["slug"] === $slug){
        //         $new_post = $post;
        //     }

        //  }

        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }

    public function categories()
    {
        return view('categories', [
            'title' => 'Post Catagories',
            "active" => 'categories',
            'categories' => Category::all()
        ]);
    }


    public function category(Category $category)
    {
        return view('posts', [
            'title' => "Post By Category: $category->name",
            "active" => 'categories',
            'posts' => $category->posts->load('category', 'author'),
            'category' => $category->name
        ]);
    }
}
