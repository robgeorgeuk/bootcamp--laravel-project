<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class Articles extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return Article::create($data);
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->all();
        $article->fill($data)->save();
        return $article;
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response(null, 204);
    }
}
