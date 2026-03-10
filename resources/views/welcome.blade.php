@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    <h3>Articles</h3>
    @foreach ($articles as $article)
        @if ($loop->last)
            @break
        @endif
        <x-article :titre="$article['titre']" :description="Str::limit($article['description'], 30, '...')" />

    @endforeach
@endsection