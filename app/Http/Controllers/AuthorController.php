<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(User $author)
    {
        return View('posts', [
            "active" => 'posts',
            'title' => "Post By Author : $author->name",
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }
}
