<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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
        $testimonial = new Testimonial();
        $request->validate([
            "text"=> "required",
            "image"=> "required",
            "prenom"=> "required",
            "fonction"=> "required"
        ]);
        $testimonial->text = $request->text;
        $testimonial->prenom = $request->prenom;
        $testimonial->fonction = $request->fonction;
        $testimonial->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/avatar", "public");
        $testimonial->save();
        return redirect()->route("adminHome");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            "text"=> "required",
            "image"=> "required",
            "prenom"=> "required",
            "fonction"=> "required"
        ]);
        $testimonial->text = $request->text;
        $testimonial->prenom = $request->prenom;
        $testimonial->fonction = $request->fonction;
        Storage::disk("public")->delete("img/avatar"  . $testimonial->image );
        $testimonial->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/avatar", "public");
        $testimonial->save();
        return redirect()->route("adminHome");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk("public")->delete("img/avatar"  . $testimonial->image );
        $testimonial->delete();
        return redirect()->back();

    }
    }
