<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected $redirectTo = '/home';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // Esta funcion es para cuando los usuarios no registrados solo pueden ver la web no podran hacer logout
    // Porque son solo visitantes.
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
// Funcion para ver la vista de login
    public function index()
    {
        return view('auth.login');
    }
// Function to validate the login fields and depending on the type of user we display different views
    public function validating(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6',
            ],
        );

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        //$role = auth()->user()->type; 

        if(Auth::attempt($credentials)) {
            return redirect("/home")->withSuccess('Te has registrado!');;
        } else {
            return view('auth.login');
        }

        // dd($role);
        // switch ($role) {
        //   case '0':
        //     return view('/home');
        //     break;
        //   case '1':
        //     return view('/admin');
        //     break; 
      
        //   default:
        //     return view('/'); 
        //   break;
        // }

    }
// Registration view
    public function registration()
    {
        return view('auth.register');
    }
// Function that validates the registration view
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        Hash::make($data['password']);

        $check = $this->create($data);

        $check->assignRole('cliente');

        Auth::login($check);
        $user = Auth::user();
        // if($user->created_at == $user->updated_at){
        //     return redirect("/home")->with("Coupon","Tienes un cupon");
        // }
        return redirect("/")->withSuccess('Te has registrado!');
    }
// Function that creates user that registrates and adds it to the database
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    } 
// Function that logsout and deletes the session of the user
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
