<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view ('articles.index' ,  compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'title' => 'required|max:255',
        'subtitle' => 'nullable|max:255',
        'content' => 'required',
        'image' => 'nullable|image|max:2048',
            ]);

        $title = $request->input('title');
        $subtitle = $request->input('subtitle');
        $content = $request->input('content');
        $image = null;

        if ( $request->hasFile('image')  ) {
        $image = $request->file('image')->store('images','public');

        }


        $article = new Article();

        $article->title = $title;
        $article->subtitle = $subtitle;
        $article->content = $content;
        $article->image = $image;


        $article->save();

        return redirect()->route('articles.index')->with('status', 'Articolo correttamente aggiunto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view ('articles.show' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
