<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SendEmailController extends Controller
{
     // Function that implements the mail api it receives the credentials fron the user and sends a message.
     public function index()
     {
         $mailData = [
             'title' => 'Su pedido es: ',
             'url' => 'http://142.132.185.47/foodfit/public/index.php'
         ];
          
         Mail::to('wintopadedokun@gmail.com')->send(new TestEmail($mailData));
         $cartItems = \Cart::clear();   
         return view('products.thanks');
     }

     /*// Function that implements the mail api it receives the credentials from the user and sends a message to user with real mail.
     public function index()
     {
         $mailData = [
             'title' => 'Su pedido es: ',
             'url' => 'http://127.0.0.1:8000'
         ];

         $user = Auth::user();

          
         Mail::to($user->email)->send(new TestEmail($mailData));
         $cartItems = \Cart::clear();   
         return view('products.thanks');
    }*/
}
