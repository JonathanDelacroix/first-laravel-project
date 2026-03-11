@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    <h3>Articles</h3>
    @foreach ($articles as $article)
        @if ($loop->last)
            @break
        @endif
        <a href="{{ route('article.details', ['id' => $article->id]) }}">
            <x-article
                :title="$article['title']"
                :description="Str::limit($article['description'], 30)"
            />
        </a>
    @endforeach
@endsection