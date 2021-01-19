<?php

namespace App\Http\Controllers;

use App\Models\BlogRapid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogRapidController extends Controller
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
        $blogRapid = new BlogRapid();
        $request->validate([
            "image"=> "required",
            "titre"=> "required",
            "text"=> "required"
        ]);
        $blogRapid->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $blogRapid->titre = $request->titre;
        $blogRapid->text = $request->text;
        $blogRapid->save();
        return redirect()->route("adminService");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogRapid  $blogRapid
     * @return \Illuminate\Http\Response
     */
    public function show(BlogRapid $blogRapid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogRapid  $blogRapid
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogRapid $blogRapid)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogRapid  $blogRapid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogRapid $blogRapid)
    {
        $request->validate([
            "image"=> "required",
            "titre"=> "required",
            "text"=> "required"
        ]);
        Storage::disk("public")->delete("img/"  . $blogRapid->image);
        $blogRapid->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $blogRapid->titre = $request->titre;
        $blogRapid->text = $request->text;
        $blogRapid->save();
        return redirect()->route("adminService");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogRapid  $blogRapid
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogRapid $blogRapid)
    {
        Storage::disk("public")->delete("img/"  . $blogRapid->image);
        $blogRapid->delete();
        return redirect()->back();
    }
}
