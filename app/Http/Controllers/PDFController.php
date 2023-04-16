<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Bill;
use Darryldecode\Cart\Cart;

class PDFController extends Controller
{
    /**
     * Display a bill's email.
     *
     * @return \Illuminate\Http\Response
     */
    public function emailPDF()
    {

        $user = Auth::user();
        $cartItem = \Cart::getContent();
        $cartTotal = \Cart::getTotal();

        $data = [
            'title' => 'Pedido',
            'date' => date('d/m/Y h:i'),
            'user' => $user,
            'cart' => $cartItem,
            'total' => $cartTotal
        ];

        $pdf = PDF::loadView('pdf.emailPDF', $data);

        return $pdf->download('Recibo.pdf');
    }

    /**
     * Display a user's bill.
     *
     * @return \Illuminate\Http\Response
     */
    public function billPDF(Bill $bill)
    {

        $user = Auth::user();

        $users = auth()->user()->id;

        $bill = Bill::select('*')
        ->where('user_id', '=', $users)
        ->get();

        $data = [
            'title' => 'Historial de facturas',
            'date' => date('d/m/Y'),
            'user' => $user,
            'bill' => $bill
        ];

        $pdf = PDF::loadView('pdf.billPDF', $data);

        return $pdf->download('Historial de facturas.pdf');
    }
}
