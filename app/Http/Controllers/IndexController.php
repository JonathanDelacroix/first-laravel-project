<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $name = "Jon";

        $articles = Article::all();

        // return view('welcome', [
        //     'name' => $name,
        //     'articles' => $articles,
        // ]);

        return view('welcome', compact('name', 'articles'));
    }
}