<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\BlogController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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
Route::get('/faqs', function () {
    return view('faqs');
});


Route::get('/sobre', function () {
    return view('sobre');
});

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



// Login views 



/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');


    Route::get('/faq', function () {
        return view('profile.userFaqs');
    });
    Route::post('/user','UserController@update')->name('users.update');
    Route::get('/bill', [BillController::class, 'index'], function () {
    })->name('bill.list');
    Route::post('/pago', [BillController::class, 'store']);
    Route::get('/thanks', function () {
        return view('products.thanks');
    });
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
    Route::get('/abouts', function () {
        return view('layouts.about');
    });
});




/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('products', ProductController::class);
    Route::resource('coupons', CouponsController::class);
});

Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password',  [ForgotPasswordController::class, 'postEmail']);



// Auth::routes();


