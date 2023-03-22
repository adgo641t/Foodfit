<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category_blogs;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web', ['except' => ['index']]);
    }


    public function index() {

        //$blog = Blog::all();
        
        return view('blog/index' ,[
            'blogs' => Blog::latest()->filter(request(['category','search']))->simplePaginate(4)

        ]);  
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
       //dd($request);
        $request->validate([
            'title' => ['required','string','max:50'],
            'description' => ['required','string','max:50'],
            'category_id' => ['required'],
            'creator' => ['required'],
        ]);

        if($request->hasFile('file')){

            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('public'), $imageName);

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->category_id = $request->category_id;
            $blog->creator = $request->creator;
            $blog->image =  $imageName;

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

    public function UpdateNewBlog(Request $request, Blog $blog) {

        $request->validate([
            'title' => ['required','string','max:50'],
            'description' => ['required','string','max:50'],
            'category_id' => ['required'],
            'creator' => ['required'],
        ]);

        $inputs = $request->all();

        if($request->hasFile('image')){

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('public'), $imageName);

            $blog = Blog::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = $inputs['description'];
            $blog->category_id = $inputs['category_id'];
            $blog->creator = $inputs['creator'];
            $blog->image = $imageName;

            $blog->save();
            // redirect
            return redirect()->route('blog');    

        }else {
            unset($inputs['image']);
            $blog = Blog::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = $inputs['description'];
            $blog->category_id = $inputs['category_id'];
            $blog->creator = $inputs['creator'];

            $blog->save();
            // redirect
            return redirect()->route('blog');    
        }
    }
}