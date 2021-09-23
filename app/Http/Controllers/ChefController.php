<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataChef = Chef::all();
        return view('backoffice.chefs.all', compact('dataChef'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        return view('backoffice.chefs.show', compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        return view('backoffice.chefs.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {
        request()->validate([
            "nom"=>["required"],
            "icon1"=>["required"],
            "icon2"=>["required"],
            "icon3"=>["required"],
            "icon4"=>["required"],
            "icon5"=>["required"],
            "icon6"=>["required"]
        ]);
        
        $chef = new Chef();
        $chef->nom = $request->nom;
        $chef->icon1 = $request->icon1;
        $chef->icon2 = $request->icon2;
        $chef->icon3 = $request->icon3;
        $chef->icon4 = $request->icon4;
        $chef->icon5 = $request->icon5;
        $chef->icon6 = $request->icon6;
        $chef->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
        return redirect()->back();
    }
}
