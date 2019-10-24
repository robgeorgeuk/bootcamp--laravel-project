<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class Articles extends Controller
{
    // shows all articles
    public function index()
    {
        return view("articles/list", [
            "articles" => Article::all()
        ]);
    }

    // shows search result
    public function search(Request $request)
    {
        $query = $request->get("query");

        $articles = Article::where("title", "like", "%{$query}%")
                           ->orWhere("content", "like", "%{$query}%")
                           ->get();

        return view("articles/search", [
            "query" => $query,
            "articles" => $articles,
        ]);
    }

    // shows single article
    public function show(Article $article)
    {
        return view("articles/show", [
            "article" => $article
        ]);
    }
}
