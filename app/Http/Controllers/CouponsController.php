<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // It displays the view of coupons by ordering the last item added to the table
    public function index()
    {
        $data['coupons'] = Coupon::orderBy('id','desc')->paginate(5);
        return view('coupons.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // It displays the view of when we create a coupon
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // It validates if the coupons exist when applied and it gives a message if applied correctly or not
    public function validCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if (!$coupon) {
            return redirect()->route('bill.list')->with('danger', 'coupon no existe. Inténtalo otra vez.');
        }
         $request->session()->put('coupon',  [
             'code' => $coupon->code,
             'amount' => $coupon->amount,
         ]);

         return redirect()->route('bill.list')->with('success_message', 'cupon ha sido aplicado con exito');

    }
// Function that creates a coupon and adds it to the database
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'amount' => 'required',
            'description' => 'required'
            ]);
            $coupon = new Coupon;
            $coupon->code = $request->code;
            $coupon->amount = $request->amount;
            $coupon->description = $request->description;
            $coupon->save();
            return redirect()->route('coupons.index')
            ->with('success','Cupón ha sido creado exitosamente.');
    }

    // public function couponList()
    // {
    //     $cuponItems = Coupon::getContent();
    //     // dd($cartItems);
    //     return view('layouts/cart', compact('cartItems'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // It display the coupon list
    public function show(Coupon $coupon)
    {
        return view('coupons.show',compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // It diplays the edit view of the chosen coupon
    public function edit(Coupon $coupon)
    {
        return view('coupons.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // It updates the fields of the coupons requested to edit and all fields can't be null or empty
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'code' => 'required',
            'amount' => 'required',
            'description' => 'required'
            ]);
            $input = $request->all();
            $coupon->update($input);
            return redirect()->route('coupons.index')
            ->with('success','Cupón actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // It deletes the coupon from the list and database and makes a redirection to the view of list coupons
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('coupons.index')
        ->with('success','Cupón eliminado exitosamente');
    }
}
