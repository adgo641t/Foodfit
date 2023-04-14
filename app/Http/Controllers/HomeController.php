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
        else {
            return view('home');
        }

    }

}
