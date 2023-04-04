<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    // Function that displays the data of the user to edit
    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }
// it validates the fields before it updates the new fields the user inputs
    public function update(Request $request)
    { 
        $request->validate([
            'name'=>'required|min:4|string|max:255',
            'email'=> 'required|email|string|max:255',
            'contraseña' => 'required'
        ]);

        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['contraseña'];
 
        $user->save();
        return back()->with('message','Usuario Actualizado');
}

}
