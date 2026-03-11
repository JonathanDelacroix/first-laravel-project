@extends('layouts.app')

@section('title', 'Article ' . $article->id)

@section('content')
    <x-article 
        :title="$article->titre"
        :description="$article->description"
    />
@endsection