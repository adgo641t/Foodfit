<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\Category_blogs;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }


    public function index() {

        //$blog = Blog::all();
        
        return view('blog/index' ,[
            'blogs' => blog::latest()->filter(request(['category','search']))->simplePaginate(4),
            'Category_blogs' => Category_blogs::all()
        ]);  
    }

    public function show($id) {

        $blog = blog::find($id);
        $Category_blogs = Category_blogs::all();
        
        return view('blog/ShowBlog', compact('blog', 'Category_blogs'));  
    }

    
    public function showCategory($category) {

        $blog = blog::where('Categori_blog', $category);
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

            $blog = new blog();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->category_id = $request->category_id;
            $blog->creator = $request->creator;
            $blog->image =  $imageName;
            

            //$request->file->store('product', 'public');

            $blog->save(); // Finally, save the record.

            //$category = Category_blogs::find($request->category_id);

            //$blog->categories()->attach([$blog->id, $request->category_id]);

            

            return redirect()->route('blog');
        }
        

    }
    public function DeleteBlog($id) {
        $blog = blog::find($id);
        $blog->delete();

        return redirect()->route('blog');
        
    }

    public function GetUpdateView($id) {
        $blog = blog::find($id);
        $category_blog = Category_blogs::all();
        return view('blog/UpdateBLog', compact('blog','category_blog'));
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

    public function CreateNewCategory(Request $request) {
        dd($request);
    }
}