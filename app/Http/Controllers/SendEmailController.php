<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestEmail;

class SendEmailController extends Controller
{
     // Function that implements the mail api it receives the credentials fron the user and sends a message.
     public function index()
     {
         $mailData = [
             'title' => 'Su pedido es: ',
             'url' => 'http://127.0.0.1:8000/home'
         ];
          
         Mail::to('fpb1.adrian@gmail.com')->send(new TestEmail($mailData));
         $cartItems = \Cart::clear();   
         return view('products.thanks');
     }
}
