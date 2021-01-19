<?php

namespace App\Http\Controllers;

use App\Models\TitreTesti;
use Illuminate\Http\Request;

class TitreTestiController extends Controller
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
     * @param  \App\Models\TitreTesti  $titreTesti
     * @return \Illuminate\Http\Response
     */
    public function show(TitreTesti $titreTesti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitreTesti  $titreTesti
     * @return \Illuminate\Http\Response
     */
    public function edit(TitreTesti $titreTesti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitreTesti  $titreTesti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitreTesti $titreTesti)
    {
        $request->validate([
            "titre"=> "required"
        ]);
        $titreTesti->titre = $request->titre;
        $titreTesti->save();
        return redirect()->route("adminHome");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitreTesti  $titreTesti
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitreTesti $titreTesti)
    {
        //
    }
}
