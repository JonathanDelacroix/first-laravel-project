<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        // return view('pages.article-details', ['id' => $id]);
        return view('pages.article-details', compact('article'));
    }

    public function creer()
    {
        Article::create([
            'title' => "L’IA soigne mieux",
            'description' => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."
        ]);

        Article::create([
            'title' => "Villes vertes",
            'description' => "Les métropoles deviennent plus écologiques et durables."
        ]);

        Article::create([
            'title' => "Télétravail",
            'description' => "Plus de liberté, mais aussi plus de solitude."
        ]);

        return "3 articles créés avec succès !";
    }

    public function modifier($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return "Article introuvable.";
        }

        $article->title = "Titre modifié";
        $article->description = "Description modifiée";
        $article->save();

        return "Article #{$id} modifié avec succès !";
    }

    public function supprimer($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return "Article introuvable.";
        }

        $article->delete();

        return "Article #{$id} supprimé avec succès !";
    }
}