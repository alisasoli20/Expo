<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vans;

class VanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.vans.index')->with('vans',Vans::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.vans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vans::create([
            'name'=> $request->van_name,
        ]);
        session()->flash('status','Van has been added Successfully');
        return redirect(route('vans.index'));
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
    public function edit(Vans $van)
    {
        return view('pages.admin.vans.create')->with('van',$van);
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
        $van = Vans::find($id);
        $van->name = $request->van_name;
        $van->save();
        session()->flash('status','Van has been updated successfully');
        return redirect(route('vans.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $van = Vans::where('id',$id);
        $van->delete();
        session()->flash('status','Van has been deleted successfully');
        return redirect(route('vans.index'));
    }
}
