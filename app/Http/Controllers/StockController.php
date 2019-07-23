<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Stocks;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.stocks.index')->with('stocks',Stocks::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = Stocks::where('products_id',$request->search)->first();    
        if($stock->count()==0){
        Stocks::create([
            'products_id'=>$request->search,
            'cartons'=>$request->s_cartons,
            'boxes'=>$request->s_boxes,
            'pieces'=>$request->s_pieces
            ]);
        }
        else {
            $stock->cartons+=$request->s_cartons;
            $stock->boxes+= $request->s_boxes;
            $stock->pieces+=$request->s_pieces;
            $stock->save();
        }

        session()->flash('status','Product has been successfully Purchased');
        return redirect(route('stocks.index'));
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
    public function edit($id)
    {
        return view('pages.admin.stocks.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request)
    {
        if($request->ajax()){
            $id = $request->get('query');
            $product = Products::findOrFail($id);
            $product = array(
                'name' => $product->product_name,
                'c_price' => $product->company_price,
                's_price' => $product->selling_price,
                'cartons' => $product->cartons,
                'boxes' => $product->boxes,
                'pieces' => $product->pieces
            );
            return $product;
        }
    }
}
