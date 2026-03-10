@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h2>Article {{ $id }}</h2>
    <p>Article portant l'identifiant {{ $id }}.</p>
@endsection