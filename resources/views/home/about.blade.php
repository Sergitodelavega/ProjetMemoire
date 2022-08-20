@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container" style="height: 100px">
    <div class="row mt-5">
        <div class="col-lg-4 ms-auto">
            <p class="lead">{{ $viewData["description"] }}</p>
        </div>
        <div class="col-lg-4 ms-auto">
            <p class="lead">{{ $viewData["author"] }}</p>
        </div>
    </div>
</div>

@endsection