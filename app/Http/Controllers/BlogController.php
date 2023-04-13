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
    public function index()
    {

        //$blog = Blog::all();

        return view('blog/index', [
            'blogs' => Post::latest()->filter(request(['category', 'search', 'users']))->simplePaginate(4),
            'Category_blogs' => Category_blogs::all(),
            'users' => User::all()
        ]);
    }

    /**
     * This method Show a single blog and retrieve the content of the blog by ID
     */
    public function show($id)
    {

        $blog = Post::find($id);
        $users = User::all();
        $Category_blogs = Category_blogs::all();

        return view('blog/ShowBlog', compact('blog', 'Category_blogs', 'users'));
    }

    /**
     * This method Return the view to add a new blog
     */
    public function AddNewBlog()
    {

        $category_blog = Category_blogs::all();

        return view('blog/AddBlog', compact('category_blog'));
    }

    /**
     * This function Stores the blog in the database 
     * if it contains an image and contains at least 
     * one category otherwise it returns a message.
     * @param Request $request
     */
    public function StoreBlog(Request $request)
    {

        dd($request);
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string'],
            'category_id' => ['required'],
            'category_id_2' => ['sometimes', 'required'],
            'category_id_3' => ['sometimes', 'required'],
            'file' => ['required']
        ]);

        if ($request->hasFile('file')) {

            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('public'), $imageName);

            $blog = new Post();

            if ($blog->category_id == 1 && $blog->category_id_2 == 1 && $blog->category_id_3 == 1) {

                return redirect()->back()->withInput()->withErrors([
                    'category_id' => 'El blog tiene que tener como minimo una categoria',
                ]);
            } else {
                $blog->save(); // Finally, save the record.

                $Post_blog_Category = new  Post_category_blog();
                $Post_blog_Category->category_blogs_id = $blog->category_id;
                $Post_blog_Category->category_blogs_id_2  = $blog->category_id_2;
                $Post_blog_Category->category_blogs_id_3  = $blog->category_id_3;
                $Post_blog_Category->post_id  = $blog->id;

                $Post_blog_Category->save();

                if (auth()->user()->name == "Adrian") {
                    return redirect()->route('AdminBlog');
                } else if (auth()->user()->name == "Jose") {
                    return redirect()->route('CreatorsBlogs');
                }
            }
        } else {
            return redirect()->back()->withInput()->withErrors([
                'file' => 'El blog tiene que tener una imagen',
            ]);
        }
        //$request->file->store('product', 'public');
    }

    /**
     * This function deletes the blog by passing 
     * the blog id and will delete the blog.
     * @param $id
     */
    public function DeleteBlog($id)
    {

        $blog = Post::find($id);
        $blog->delete();

        if (auth()->user()->name == "Adrian") {
            return redirect()->route('AdminBlog');
        } else if (auth()->user()->name == "Jose") {
            return redirect()->route('CreatorsBlogs');
        }
    }

    /**
     * This function returns a view with the blog with 
     * the id to be able to modify it.
     * @param $id
     */
    public function GetUpdateView($id)
    {
        $blog = Post::find($id);
        $category_blog = Category_blogs::all();
        return view('blog/UpdateBLog', compact('blog', 'category_blog'));
    }

    /**
     * This method is to be able to modify the blog, you can 
     * modify the blog can only modify the content without
     *  need to put a new photo or if you decide that the blog 
     * will keep the same categories, 
     * (By default will be the selects without category,
     *  unless you want canviarlas will be the ones you think necessary)
     * 
     * @param Requets $request
     * @param Post $blog
     */
    public function UpdateNewBlog(Request $request, Post $blog)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string'],
            'category_id' => ['required'],
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('public'), $imageName);

            $blog = Post::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = $inputs['description'];
            $blog->category_id = $inputs['category_id'];
            $blog->category_id_2 = $inputs['category_id_2'];
            $blog->category_id_3 = $inputs['category_id_3'];
            //$blog->creator = $inputs['creator'];
            $blog->image = $imageName;

            $blog->save();

            $id_blog = $blog->id;

            //get the post where the id of the post and retrieve the data of the post
            $posts = Post_category_blog::where('post_id', $id_blog)->get();

            foreach ($posts as $post) {
                $post->update(['category_blogs_id' => $blog->category_id]);
                $post->update(['category_blogs_id_2' => $blog->category_id_2]);
                $post->update(['category_blogs_id_3' => $blog->category_id_3]);
                $post->update(['post_id' => $id_blog]);
            }

            // redirect
            if (auth()->user()->name == "Adrian") {
                return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose") {
                return redirect()->route('CreatorsBlogs');
            }
        } else if ($inputs['category_id'] == 1 && $inputs['category_id_2'] == 1 && $inputs['category_id_3'] == 1) {
            unset($inputs['category_id']);
            unset($inputs['category_id_2']);
            unset($inputs['category_id_3']);


            $blog = Post::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = $inputs['description'];
            //$blog->creator = $inputs['creator'];

            $blog->save();


            if (auth()->user()->name == "Adrian") {
                return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose") {
                return redirect()->route('CreatorsBlogs');
            }
        } else {
            unset($inputs['image']);

            $blog = Post::find($blog->id);

            $blog->title = $inputs['title'];
            $blog->description = $inputs['description'];
            $blog->category_id = $inputs['category_id'];
            $blog->category_id_2 = $inputs['category_id_2'];
            $blog->category_id_3 = $inputs['category_id_3'];
            //$blog->creator = $inputs['creator'];

            $blog->save();

            $id_blog = $blog->id;

            //get the post where the id of the post and retrieve the data of the post
            $posts = Post_category_blog::where('post_id', $id_blog)->get();

            foreach ($posts as $post) {
                $post->update(['category_blogs_id' => $blog->category_id]);
                $post->update(['category_blogs_id_2' => $blog->category_id_2]);
                $post->update(['category_blogs_id_3' => $blog->category_id_3]);
                $post->update(['post_id' => $id_blog]);
            }

            if (auth()->user()->name == "Adrian") {
                return redirect()->route('AdminBlog');
            } else if (auth()->user()->name == "Jose") {
                return redirect()->route('CreatorsBlogs');
            }
        }
    }
}
