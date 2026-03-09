<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index(): Response
    {
        return response('Bienvenue sur la page d\'accueil');
    }
}