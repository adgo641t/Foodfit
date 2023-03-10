<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {

        $blog = Blog::all();
        
        return view('blog/index', compact('blog'));  
    }
}

