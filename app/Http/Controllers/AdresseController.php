<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function show(Adresse $adresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function edit(Adresse $adresse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adresse $adresse)
    {
        $this->authorize("update",$adresse);
        $request->validate([
            "addresse"=> "required"
        ]);
        $adresse->addresse = $request->addresse;
        $adresse->save();
        return redirect()->route("adminMap");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adresse $adresse)
    {
        //
    }
}
