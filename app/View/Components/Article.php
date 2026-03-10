<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Article extends Component
{
    public $titre;
    public $description;

    public function __construct($titre, $description)
    {
        $this->titre = $titre;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.article');
    }
}
