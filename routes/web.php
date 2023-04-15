<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Category_controller;
use App\Models\Category_blogs;
use App\Http\Controllers\PDFController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//GETS
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/faqs', function () {
    return view('profile.userFaqs');
});

Route::get('/faq', function () {
    return view('profile.userFaqs');
})->name('faq');

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/abouts', function () {
    return view('layouts.about');
})->name('aboutUs');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [LoginController::class, 'registration'])->name('register-user');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//POSTS
// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/bill', [CouponsController::class, 'validCoupon'], function () {
})->name('coupon.store');

Route::post('/validating', [LoginController::class, 'validating'])->name('validating');
Route::post('/custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');


//DELETES
Route::delete('/bill', [CouponsController::class, 'destroy'])->name('coupon.destroy');
//Route::get('/home', [HomeController::class, 'index']);


// Login views



/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['role:cliente']],function () {

    Route::get('/ClientBlogs', [BlogController::class, 'index'])->name('ClientBlog');

    Route::get('send-mail', [SendEmailController::class, 'index']);

    Route::get('/ShowBlogClient/{id}', [BlogController::class, 'show'])->name('ShowBlogClient');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    //Route::get('/user', [BlogController::class, 'index'])->name('user');

    //Route::post('/user','UserController@update')->name('users.update');

    Route::get('/bill', [BillController::class, 'index'], function () {
    })->name('bill.list');

    Route::post('/pago', [BillController::class, 'store']);

    Route::get('/thanks', function () {
        return view('products.thanks');
    });

    Route::get('/show-bill', [BillController::class, 'show'], function () {
    })->name('show');

    Route::get('/show-coupons', [CouponsController::class, 'displayCoupons'], function () {
    })->name('displayCoupons');

    Route::post('/user/profile', [UserController::class, 'update'], function () {
    })->name('users.update');
    Route::get('/product', [ProductController::class, 'productList'], function () {
    })->name('products.list');
    Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    Route::post('/coupon', [CouponsController::class, 'validCoupon']);
    Route::post('removeAllItems', [CartController::class, 'removeAllItems'])->name('cart.deleteAll');
});




/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' , ['role:admin']],function () {

    Route::resource('products', ProductController::class);
    Route::resource('coupons', CouponsController::class);


    //Route::get('/home', [HomeController::class, 'index']);

    Route::get('/AdminBlog', [BlogController::class, 'index'])->name('AdminBlog');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');


    Route::get('/admin', function () {
        return view('admin');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('products', ProductController::class);
    Route::resource('coupons', CouponsController::class);
    Route::resource('categories', Category_controller::class);

    Route::get('/ShowBlogAdmin/{id}', [BlogController::class, 'show'])->name('ShowBlogAdmin');


    Route::get('ShowAddCategory', function () {
        return view('blog.AddCategoryBlog');
    })->name('ShowAddCategory');

    Route::get('/add_blogAdmin', [BlogController::class, 'AddNewBlog'])->name('add_blogAdmin');
    
    Route::post('/blogAdmin.store', [BlogController::class, 'StoreBlog'])->name('blogAdmin.store');

    Route::post('Add_new_category', [BlogController::class,'CreateNewCategory'])->name('Add_new_category');

    Route::post('StoreCategory', [Category_controller::class,'CreateNewCategory'])->name('StoreCategory');


    Route::post('deleteBlogAdmin/{id}', [BlogController::class,'DeleteBlog'])->name('deleteBlogAdmin');

    Route::post('UpdateBlogAdmin/{id}',[BlogController::class,'GetUpdateView'])->name('UpdateBlogAdmin');

    Route::post('UpdateNewBlogAdmin/{blog}',[BlogController::class,'UpdateNewBlog'])->name('UpdateNewBlogAdmin');

    Route::get('list-bill', [ProductController::class, 'listBills'], function(){
    })->name('listBills');

});

Route::group(['middleware' , ['role:BlogCreator']],function () {

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    // Route::get('/home', [HomeController::class, 'index']);

    Route::get('/CreatorsBlogs', [BlogController::class, 'index'])->name('CreatorsBlogs');
    Route::get('/ShowBlogCreator/{id}', [BlogController::class, 'show'])->name('ShowBlogCreator');
    Route::get('/ShowCategoryBlog/{category}', [BlogController::class, 'showCategory'])->name('ShowCategoryBlog');

    Route::get('/add_blogCreator', [BlogController::class, 'AddNewBlog'])->name('add_blogCreator');


    Route::post('/blogCreator.store', [BlogController::class, 'StoreBlog'])->name('blogCreator.store');


    Route::post('deleteBlogCreator/{id}', [BlogController::class,'DeleteBlog'])->name('deleteBlogCreator');

    Route::post('UpdateBlogCreator/{id}',[BlogController::class,'GetUpdateView'])->name('UpdateBlogCreator');

    Route::post('UpdateNewBlogCreator/{blog}',[BlogController::class,'UpdateNewBlog'])->name('UpdateNewBlogCreator');

});


Route::group(['middleware' => ['role:chef']],function () {
    Route::get('/showBill', [BillController::class, 'ShowAll'], function () {
    })->name('show');

    Route::post('/update-status/{id}', [BillController::class, 'updateStatus'])->name('update-status');

});

Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password',  [ForgotPasswordController::class, 'postEmail']);

Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');

Route::get('email-pdf', [PDFController::class, 'emailPDF']);
Route::get('bill-pdf', [PDFController::class, 'billPDF']);



// Auth::routes();
