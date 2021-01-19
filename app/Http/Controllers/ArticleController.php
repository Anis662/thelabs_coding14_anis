<?php

namespace App\Http\Controllers;

use App\Events\UserNewsletter;
use App\Models\Article;
use App\Models\Newsletter;
use App\Models\User;
use App\Notifications\ArtcilePublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       
        $article = new Article();
        $user = User::all();
        foreach($user as $i) {
            $i->notify(new ArtcilePublished($article));
        }

        
        $request->validate([
            "image"=> "required",
            "titre"=> "required",
            "text"=> "required",
            "description"=> "required",
            "tab"=> "required",
            "tab2"=> "required"
        ]);
        $article->verification_id = $request->verification_id;
        $article->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/blog", "public");
        $article->titre = $request->titre;
       
        $article->text = $request->text;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $newsletter = Newsletter::all();
        foreach($newsletter as $e) {
            $e->notify(new ArtcilePublished($article));
        }
        $article->save();
        $article->tags()->attach($request->tab);
        $article->categories()->attach($request->tab2);
        return redirect()->route("adminBlog");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            "image"=> "required",
            "titre"=> "required",
            "text"=> "required",
            "description"=> "required"
        ]);
        Storage::disk("public")->delete("img/blog"  . $article->image);
        $article->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img/blog", "public");
        $article->titre = $request->titre;
        $article->text = $request->text;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $article->save();
        $article->tags()->sync($request->tab);
        $article->categories()->sync($request->tab2);

        // $article->tags()->detach($request->tab);

        return redirect()->route("adminBlog");



    }
    public function sendArticle(Request $request, $id)
    {

        $article = Article::find($id);
        $article->verification_id = $request->verification_id;
        $article->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk("public")->delete("img/blog"  . $article->image);
        $article->tags()->detach($article->tags);

        $article->categories()->detach($article->categories);
        
        $article->delete();

        return redirect()->back();
    }
}
