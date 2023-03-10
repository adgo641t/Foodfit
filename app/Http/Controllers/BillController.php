<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Bill;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

// It displays the bill view
    public function index(Request $request)
    {
        return view('layouts/bill');
    
    }
// This is a function that implements the stripe api it sets the implementation and it charges the amount currency
// and sends a message but first we need to put the stripe account in the env file
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Test payment from Food&Fit."
        ]);
   
        Session::flash('success', 'Pago completo!');
           
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => ['required', 'email'],
            'adresa' => 'required',
            'zip' => 'required|digits:5',
            'tarjeta' => 'required',
            'tarjetaNumero' => 'required|digits:15',
            'cvv' => 'required|digits:3',
        ]);
        $cartItems = \Cart::clear();
        return redirect('/thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
