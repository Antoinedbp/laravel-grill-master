<?php

namespace App\Http\Controllers;

use App\Models\Steak;
use Illuminate\Http\Request;

class SteakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSteak = Steak::all();
        return view('backoffice.steak.all', compact('dataSteak'));
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
     * @param  \App\Models\Steak  $steak
     * @return \Illuminate\Http\Response
     */
    public function show(Steak $steak)
    {
        return view('backoffice.steak.show', compact('steak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Steak  $steak
     * @return \Illuminate\Http\Response
     */
    public function edit(Steak $steak)
    {
        return view('backoffice.steak.edit', compact('steak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Steak  $steak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Steak $steak)
    {
        request()->validate([
            "titre"=>["required"],
            "description"=>["required"],
            "txtBouton"=>["required"]
        ]);
        
        $steak = new Steak();
        $steak->titre = $request->titre;
        $steak->description = $request->description;
        $steak->txtBouton = $request->txtBouton;
        $steak->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Steak  $steak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Steak $steak)
    {
        $steak->delete();
        return redirect()->back();
    }
}
