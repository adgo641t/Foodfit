<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Category;
use App\Models\Post;
use App\Models\Category_blogs;
use App\Models\Post_category_blog;
use App\Models\Bill;
use App\Models\Coupon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            /*$productController = app(\App\Http\Controllers\ProductController::class);
            $productController->index();*/
            $products = Product::latest()->paginate(5);
            return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        elseif (Auth::user()->hasRole('BlogCreator')) {
            return view('blog/index' ,[
                'blogs' => Post::latest()->filter(request(['category','search','users']))->simplePaginate(4),
                'Category_blogs' => Category_blogs::all(),
                'users' => User::all()
            ]);
        }

        elseif (Auth::user()->hasRole('chef')) {
            $bill = Bill::all();

        return view('layouts/show-bill', compact('bill'));
        }
        else {
            return view('home');
        }

    }

}
