<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category_blogs;
use App\Models\Post_category_blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{

    /**
     * This method is for the user authentication and authorization
     */
    public function __construct()
    {
        $this->middleware('role:admin|BlogCreator|cliente');
    }


    /**
     * This method is for see the content of the blog and filter when th user 
     * search is requested or selects 
     */
    public function index() {

        //$blog = Blog::all();
        
        return view('blog/index' ,[
            'blogs' => Post::latest()->filter(request(['category','search','users']))->simplePaginate(4),
            'Category_blogs' => Category_blogs::all(),
            'users' => User::all()
        ]);  
    }

    /**
     * This method Show a single blog and retrieve the content of the blog by ID
     */
    public function show($id) {

        $blog = Post::find($id);
        $users = User::all();
        $Category_blogs = Category_blogs::all();

        foreach ($users as $user) {
            if($user->id == $blog->creator) {
                $blog->creator = $user->name;
        }
    }
        
        return view('blog/ShowBlog', compact('blog', 'Category_blogs','users'));  
    }

    public function AddNewBlog() {

        $category_blog = Category_blogs::all();

       return view('blog/AddBlog', compact('category_blog')); 
    }

    public function StoreBlog(Request $request) {

       //dd($request);
        $request->validate([
            'title' => ['required','string','max:50'],
            'description' => ['required','string'],
            'category_id' => ['sometimes','required'],
            'category_id_2' => ['sometimes','required'],
            'category_id_3' => ['sometimes','required'],
        ]);

        if($request->hasFile('file')){

            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('public'), $imageName);

            $blog = new Post();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->category_id = $request->category_id;
            $blog->category_id_2 = $request->category_id_2;
            $blog->category_id_3 = $request->category_id_3;
            $blog->creator =  auth()->user()->id;
            $blog->image =  $imageName;

            if($blog->category_id == 1 && $blog->category_id_2 == 1 && $blog->category_id_3 == 1) {

                return redirect()->back()->withInput()->withErrors([
                    'category_id_3' => 'El blog tiene que tener como minimo una categoria',
                ]);

            } else {
                $blog->save(); // Finally, save the record.

                $Post_blog_Category = new  Post_category_blog();
                $Post_blog_Category->category_blogs_id = $blog->category_id;
                $Post_blog_Category->category_blogs_id_2  = $blog->category_id_2;
                $Post_blog_Category->category_blogs_id_3  = $blog->category_id_3;
                $Post_blog_Category->post_id  = $blog->id;
    
                $Post_blog_Category->save();

            if(auth()->user()->name == "Adrian") {
            return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose"){
            return redirect()->route('CreatorsBlogs');
            }
            }

            }
            //$request->file->store('product', 'public');

    }

    public function DeleteBlog($id) {
        
        $blog = Post::find($id);
        $blog->delete();

        if(auth()->user()->name == "Adrian") {
            return redirect()->route('AdminBlog');
        } else if (auth()->user()->name == "Jose"){
            return redirect()->route('CreatorsBlogs');
        }
    }

    public function GetUpdateView($id) {
        $blog = Post::find($id);
        $category_blog = Category_blogs::all();
        return view('blog/UpdateBLog', compact('blog','category_blog'));
    }

    public function UpdateNewBlog(Request $request, Post $blog) {

        $request->validate([
            'title' => ['required','string','max:50'],
            'description' => ['required','string'],
            'category_id' => ['required'],
        ]);

        $inputs = $request->all();

        if($request->hasFile('image')){

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('public'), $imageName);

            $blog = Post::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = trim($inputs['description']);
            $blog->category_id = $inputs['category_id'];
            $blog->category_id_2 = $inputs['category_id_2'];
            $blog->category_id_3 = $inputs['category_id_3'];
            //$blog->creator = $inputs['creator'];
            $blog->image = $imageName;

            $blog->save();

            $id_blog = $blog->id;

            //get the post where the id of the post and retrieve the data of the post
            $posts = Post_category_blog::where('post_id', $id_blog)->get();

            foreach($posts as $post) {
                $post->update(['category_blogs_id' => $blog->category_id]);
                $post->update(['category_blogs_id_2' => $blog->category_id_2]);
                $post->update(['category_blogs_id_3' => $blog->category_id_3]);
                $post->update(['post_id' => $id_blog]);
            }

            // redirect
            if(auth()->user()->name == "Adrian") {
                return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose"){
                return redirect()->route('CreatorsBlogs');
            }

        }else if($inputs['category_id'] == 1 && $inputs['category_id_2'] == 1 && $inputs['category_id_3'] == 1) {
            unset($inputs['category_id']);
            unset($inputs['category_id_2']);
            unset($inputs['category_id_3']);


            $blog = Post::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = trim($inputs['description']);
            //$blog->creator = $inputs['creator'];
            
            $blog->save();

           
            if(auth()->user()->name == "Adrian") {
                return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose"){
                return redirect()->route('CreatorsBlogs');
            }
        } else {
            unset($inputs['image']);

            $blog = Post::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = trim($inputs['description']);
            $blog->category_id = $inputs['category_id'];
            $blog->category_id_2 = $inputs['category_id_2'];
            $blog->category_id_3 = $inputs['category_id_3'];
            //$blog->creator = $inputs['creator'];
            
            $blog->save();
            
            $id_blog = $blog->id;

            //get the post where the id of the post and retrieve the data of the post
            $posts = Post_category_blog::where('post_id', $id_blog)->get();

            foreach($posts as $post) {
                $post->update(['category_blogs_id' => $blog->category_id]);
                $post->update(['category_blogs_id_2' => $blog->category_id_2]);
                $post->update(['category_blogs_id_3' => $blog->category_id_3]);
                $post->update(['post_id' => $id_blog]);
            }

            if(auth()->user()->name == "Adrian") {
                return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose"){
                return redirect()->route('CreatorsBlogs');
            }
        }
    }
}