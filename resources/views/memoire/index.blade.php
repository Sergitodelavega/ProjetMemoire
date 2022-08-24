@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

    <div class="row" style="margin-left:10px;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Theme</th>
                <th scope="col">Filière</th>
                <th scope="col">Ecole</th>
                <th scope="col">Fichier</th>
            </tr>
            </thead>
        <tbody>
            @foreach ($viewData["memoires"] as $memoire)
          <tr>
            <th scope="row">{{ $memoire->getId() }}</th>
            <td><a href="{{ route('memoire.show', ['id'=>$memoire->getId()]) }}">{{ $memoire->getTheme() }}</a></td>
            <td><a href="">{{ $memoire->getPdf() }}</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection