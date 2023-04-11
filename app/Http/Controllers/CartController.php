<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

// It get the contents of the cart and displays the view of all the products with its elements and attributes
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('layouts/cart', compact('cartItems'));
    }
// Function that adds to the cart the attributes of the product
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->image,
            'categories' => $request->categories,
            'stock' => $request->stock
            ),
        ]);
        session()->flash('success', 'Producto añadido!');

        return redirect()->route('products.list');
    }
// Function that updates the cart and sends a message when updated
    public function updateCart(Request $request)
    {
        if($request->quantity > $request->stock){
            session()->flash('error', 'Productos insuficientes en nuestro Stock');
            return redirect()->route('cart.list');
        }else if($request->quantity <= 0 ){
            session()->flash('error', 'Cantidad no puede ser negativa');
            return redirect()->route('cart.list');
        }else{
            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );
    
            session()->flash('success', 'Carrito actualizado !');
    
            return redirect()->route('cart.list');
        }
    }
// It removes and element from the cart by the id of the product
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Producto eliminado del carrito !');

        return redirect()->route('cart.list');
    }
// It clears all products from the cart and sends a message 
    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Carrito vaciado con exito !');

        return redirect()->route('cart.list');
    }
// Function that deletes session of the products when payed successfully
    public function removeAllItems(){
        \Cart::clear();
        session()->flash('success', 'Pedido enviado ahora ten paciencia !');
        return redirect('/thanks');

    }
}
