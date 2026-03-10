<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function show($id)
    {
        return view('pages.article-details', ['id' => $id]);
    }
}