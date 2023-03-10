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

    public function show($id) {

        $blog = Blog::find($id);
        
        return view('blog/ShowBlog', compact('blog'));  
    }

    
    public function showCategory($category) {

        $blog = Blog::where('Categori_blog', $category);
        //dd($blog);
        
        return view('blog/ShowBlogCategory', compact('blog'));  
    }
}

