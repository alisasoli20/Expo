<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('pages.admin.products.products')->with('products',Products::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.products.newproducts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        Products::create([
            'product_name'=>$request->product_name,
            'supplier' => $request->supplier,
            'company_price'=>$request->company_price,
            'selling_price'=>$request->selling_price,
            'cartons'=>$request->cartons,
            'boxes'=>$request->boxes,
            'pieces'=>$request->pieces
        ]);   
        session()->flash('status','Product has been added sucessfully');
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        return view('pages.admin.products.newproducts')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Products $product)
    {
        $product= Products::find($product->id);
        $product->product_name = $request->product_name;
        $product->supplier = $request->supplier;
        $product->company_price = $request->company_price;
        $product->selling_price = $request->selling_price;
        $product->cartons = $request->cartons;
        $product->boxes = $request->boxes;
        $product->pieces = $request->pieces;
        $product->save();
        session()->flash('status',"Product has been successfully updated");
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::where('id',$id);
        $product->delete();
        session()->flash('status','Product has been deleted sucessfully');
        return redirect(route('products.index'));   
    }
}
