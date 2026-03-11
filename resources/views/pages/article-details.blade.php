@extends('layouts.app')

@section('title', 'Article ' . $article->id)

@section('content')
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->description }}</p>
@endsection