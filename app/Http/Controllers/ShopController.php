<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shops;
use App\Http\Requests\CreateShopRequest;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->isAdmin()){
            return view('pages.admin.shops.shops')->with('shops',Shops::all());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->isAdmin()){
        return view('pages.admin.shops.newshop');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateShopRequest $request)
    {
        Shops::create([
            'Shop_Name'=>$request->shop_name,
            'Shopkeeper_Name'=>$request->owner_name,
            'street'=>$request->street,
            'City'=>$request->city,
            'Country'=>$request->country,
            'Telephone_No'=>$request->number
        ]);
        session()->flash('status', 'Shop has been added successfully');
        return redirect(route('shops.index'));
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
    public function edit(Shops $shop)
    {
        return view('pages.admin.shops.newshop')->with('shop',$shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Shops $shop)
    {
        $shop =  Shops::find($shop->id);
        $shop->Shop_Name=$request->shop_name;
        $shop->Shopkeeper_Name = $request->owner_name;
        $shop->street = $request->street;
        $shop->City= $request->city;
        $shop->Country = $request->country;
        $shop->Telephone_No = $request->number;
        $shop->save();
        session()->flash('status', 'Shop has been updated successfully');
        return redirect(route('shops.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $shop =Shops::where('id',$id);
        $shop->delete();
        session()->flash('status','Shop has been delete successfully');
        return redirect(route('shops.index'));
    }
}
