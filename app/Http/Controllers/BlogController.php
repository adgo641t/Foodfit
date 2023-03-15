<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category_blogs;

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

    public function AddNewBlog() {

        $category_blog = Category_blogs::all();

       return view('blog/AddBlog', compact('category_blog')); 
    }

    public function StoreBlog(Request $request) {
       
        $request->validate([
            'title' => ['required','string','max:50'],
            'description' => ['required','string','max:50'],
            'category' => ['required'],
        ]);

        if($request->hasFile('file')){
            $blog = Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $request->file
            ]);

            $input = $request->all();
            if($image = $request->file('file')){
                
                $destinationPath = 'public/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['file'] = "$profileImage";
        }

            //$request->file->store('product', 'public');

            $blog->save(); // Finally, save the record.

            return redirect()->route('blog');
        }
        

    }
    public function DeleteBlog($id) {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blog');
        
    }

    public function GetUpdateView($id) {
        $blog = Blog::find($id);
        $category_blog = Category_blogs::all();
        return view('blog/UpdateBlog', compact('blog','category_blog'));
    }

    public function UpdateNewBlog(Request $request, $blog) {
        $blog = Blog::find($blog);
        $blog->update($request->all());
        $blog->save;

        return redirect()->route('blog');
    }


}

