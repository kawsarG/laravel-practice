<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        return view('articles.show', [
            'article' => Article::find($id)
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article();
        $article->title = request('title');
        $article->excerp = request('excerpt');
        $article->body = request('body');

        $article->save();
        return redirect('/about');
    }

    public function edit($article)
    {

        return view('articles.edit', [
            'article' => Article::find($article)
        ]);
    }

    public function update($id)
    {

        $article = Article::find($id);

        $article->title = request('title');
        $article->excerp = request('excerpt');
        $article->body = request('body');

        $article->save();
        return redirect('/articles/' . $article->id);
    }
}
