<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 

class ForgotPasswordController extends Controller
// it displays view where it asks the email to send link and reset password
{
  public function getEmail()
  {

     return view('auth.passwords.email');
  }
// It validates the email field and sends a link to an api mail we implemented so the user can reset the password
 public function postEmail(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);

    $token = str_random(64);

      DB::table('password_resets')->insert(
          ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
      );

      Mail::send('auth.verify', ['token' => $token], function($message) use($request){
          $message->to($request->email);
          $message->subject('Reset Password Notification');
      });

      return back()->with('message', 'We have e-mailed your password reset link!');
  }
}