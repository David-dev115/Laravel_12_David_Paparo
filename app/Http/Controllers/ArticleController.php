<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Storage;

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
        'title' => 'required',
        'subtitle' => 'nullable',
        'content' => 'required',
        'image' => 'nullable|image|',
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
        return view ( 'articles.edit'  , compact('article')  );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $dati = [
        'title'   => $request->input('title'),
        'subtitle' => $request->input('subtitle'),
        'content'  => $request->input('content'),
        'image'   => $request->input('image'),
    ];

        if ($request->file('image')) {
        $dati['image'] = $request->file('image')->store('image', 'public');
        }

        $article->update($dati);

        return redirect()->route('articles.show', $article)->with('status', 'Articolo correttamente modificato');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
