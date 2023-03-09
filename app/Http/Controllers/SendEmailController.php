<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
     // Function that implements the mail api it receives the credentials fron the user and sends a message.
    public function index()
    {
 
      Mail::to('receiver-email-id')->send(new NotifyMail());
 
      if (Mail::failures()) {
           return response()->Fail('Hubo un fallo');
      }else{
           return response()->success('Te hemos enviado un correo!');
         }
    }
}
