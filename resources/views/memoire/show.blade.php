@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="row">
    <div class="col">
        <h1>Mémoire {{ $viewData["memoire"]->getId() }}</h1>
        <h2>Thème : </h2> 
            {{ $viewData["memoire"]->getTheme() }}
        <h4>Description : </h4>
        <p>{{ $viewData["memoire"]->getDescription() }}</p>
        
    </div>
        
</div>

@endsection