<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
