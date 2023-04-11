<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Bill;
use App\Models\Coupon;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Validation\Rule;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:web');
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
       // dd($request);
        $formFields = $request->validate([
            'nombre' => 'required|alpha',
            'apellidos' => 'required|alpha',
            'email' => ['required', 'email'],
            'adresa' => 'required',
            'zip' => 'required|digits:5',
            'tarjeta' => 'required|alpha',
            'tarjetaNumero' => 'required|digits:15',
            'cvv' => 'required|digits:3',
        ]);

        $cartItems = \Cart::getContent();

        foreach ($cartItems as $cartItem) {
            $coupon = $request->session()->get('coupon');
            if($coupon != null){
                $quantity = $cartItem->quantity;
    
                $product = Product::find($cartItem->id);
    
                $stockActual = $product->stock;
    
                $product->stock = $stockActual-$quantity;
    
                $bill = new Bill;
                $bill->user_id = auth()->user()->id;
                $bill->product_id = $cartItem->id;
                $bill->name_user = auth()->user()->name;
                $bill->name = $cartItem->name;
                $bill->price = $cartItem->price;
                $bill->quantity = $cartItem->quantity;
                $bill->totalprice = round(\Cart::getTotal()*1.21,2);
                $bill->adress = $request->adresa;
                $bill->status = 'En realización';
                $product->save();
                $bill->save();
            }else{
                $quantity = $cartItem->quantity;
    
                $product = Product::find($cartItem->id);
    
                $stockActual = $product->stock;
    
                $product->stock = $stockActual-$quantity;
    
                $bill = new Bill;
                $bill->user_id = auth()->user()->id;
                $bill->name_user = auth()->user()->name;
                $bill->product_id = $cartItem->id;
                $bill->name = $cartItem->name;
                $bill->price = $cartItem->price;
                $bill->quantity = $cartItem->quantity;
                $bill->totalprice = round(\Cart::getTotal()*1.21,2);
                $bill->coupon = "Sin cupon";
                $bill->adress = $request->adresa;
                $bill->status = 'En realización';
                $product->save();
                $bill->save();
        } 

        $request->session()->forget('coupon');
        return redirect('send-mail');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        $user = auth()->user()->id;

        $bill = Bill::select('*')
        ->where('user_id', '=', $user)
        ->get();
        
        return view('layouts/show-bill', compact('bill'));
    }

    public function ShowAll()
    {
        $bill = Bill::all();
        
        return view('layouts/show-bill', compact('bill'));
    }

    public function updateStatus(Request $request, $bill_id)
    {
        $bill = Bill::find($bill_id);

        $bill->status = $request->input('status');

        $bill->save();

        return redirect('showBill');
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
