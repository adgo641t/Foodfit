<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
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


// It displays the view of all the products and order it by last product added
public function index()
{
    $products = Product::latest()->paginate(5);

    return view('products.index',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}


public function listBills(){
    return view('layouts/list-bills', [
        'bills' => Bill::latest()->filter(request(['search']))->simplePaginate(4)
    ]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // It displays the view to create product
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // it validates the field to create the product 
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|string',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'quantity' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
      
            $input = $request->all();
    //   It saves the image file and creates a folder to save the image to later display it
            if ($image = $request->file('image')) {
                $destinationPath = 'public/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

            $product = new Product();
            $product->name = $input['name'];
            $product->price = $input['price'];
            $product->categories = $input['categories'];
            $product->description = $input['description'];
            $product->stock = $input['quantity'];
            $product->image = $input['image'];

            $product->save();

            //Product::create($input);

            return redirect()->route('products.index')
            ->with('success','Product creado exitosamente.');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // It displays the product the admin wants to see
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // it displays the product the admin wants to edit
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // Firstly it validates the field of the product they can't be empty
    public function update(Request $request, Product $product)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        $input = $request->all();

        // It gets the image that the user chose to input and updates the file chosen and destination to save the file
        if ($image = $request->file('image')) {
            $destinationPath = 'public/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            
        }else{
            unset($input['image']);
        }
        if($request->price < 0){
            return redirect()->back()->with('error', 'No se pueden poner numeros negativos');
        }else{
        // it updates the product and saves the new values in the database
        $product->stock = $input['quantity'];
        $product->update($input);
        return redirect()->route('products.index')
        ->with('success','Product actualizado correctamente');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // It deletes the product by the id
    public function destroy(Product $product)
    {
        $product->delete();
     
        return redirect()->route('products.index')
                        ->with('success','Product eliminado exitosamente.');
    }
// It displays all the products and it's attributes
    public function productList()
    {
        return view('layouts/products', [
            'products' => Product::latest()->filter(request(['category','search']))->simplePaginate(4)
        ]);
        
    }
}
