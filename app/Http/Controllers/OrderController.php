<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Shops;
use App\Stocks;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.orders.index')->with('orders',Orders::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Orders::create([
            'vans_id'=>$request->van_id, 
            'shops_id'=>$request->shop_id
        ]);
        session()->flash('status','Order has been placed successfully');
        return redirect(route('orders.index'));
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
        //
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
    public function searchshop(Request $request){
        if($request->ajax()){
            $id = $request->get('query');
            $shop = Shops::findOrFail($id);
            $shop = array(
                'name' => $shop->Shop_Name,
                'shopkeeper_name'=>$shop->Shopkeeper_Name,
                'street'=>$shop->street,
                'city'=>$shop->City,
                'country'=>$shop->Country,
                'number'=>$shop->Telephone_No
            );
            return $shop;
        }
    }
    public function searchproduct(Request $request){
        if($request->ajax()){
            $id = $request->get('query');
            $stock = Stocks::where('products_id',$id)->first();
            $stock = array(
                'name' => $stock->products->product_name,
                'selling_price'=>$stock->products->selling_price,
                's_cartons'=>$stock->cartons,
                's_boxes'=>$stock->boxes,
                's_pieces'=>$stock->pieces,
                'p_cartons'=>$stock->products->cartons,
                'p_boxes'=>$stock->products->boxes,
                'p_pieces'=>$stock->products->pieces,
            );
            return $stock;
        }
    }
}
