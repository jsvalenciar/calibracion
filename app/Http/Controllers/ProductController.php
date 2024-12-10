<?php

namespace App\Http\Controllers;

use App\Models\product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::simplePaginate();
        return view("Products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product();
        $product->name =$request->name;
        $product->code =$request->code;
        $product->city =$request->city;
        $product->address =$request->address;
        $product->email =$request->email;
        $product->number =$request->number;
        $product->save();
        return redirect()->route("products.index");
    }
    
    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view("products.edit", ["products" => $product] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product->name =$request->name;
        $product->code =$request->code;
        $product->city =$request->city;
        $product->address =$request->address;
        $product->email =$request->email;
        $product->number =$request->number;
        $product->save();

        return redirect()->route("products.index");
    }

   public function destroy(product $product)
   {
        $product->delete();
        return redirect()->route(("products.index"));
   }

   public function pdf($id)
   {
    $product = product::find($id);
    $pdf = Pdf::loadview("products.pdf", compact("product"));
    return $pdf->stream("product".$product->id.".pdf");
   }
}
