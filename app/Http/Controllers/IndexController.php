<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $name = "Jon";

        $articles = [
            [
                'titre' => "L’IA soigne mieux",
                'description' => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."
            ],
            [
                'titre' => "Villes vertes",
                'description' => "Les métropoles deviennent plus écologiques et durables."
            ],
            [
                'titre' => "Télétravail",
                'description' => "Plus de liberté, mais aussi plus de solitude."
            ]
        ];

        // return view('welcome', [
        //     'name' => $name,
        //     'articles' => $articles,
        // ]);

        return view('welcome', compact('name', 'articles'));
    }
}