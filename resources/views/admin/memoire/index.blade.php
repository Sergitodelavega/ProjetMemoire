@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Liste des mémoires</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Id</th>
                        <th>Thème</th>
                        <th class="text-right">Voir</th>
                        <th class="text-right">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["memoires"] as $memoire)
                    <tr>
                        <td>{{ $memoire->getCreatedAt() }}</td>
                        <td>{{ $memoire->getId() }}</td>
                        <td>{{ $memoire->getTheme() }}</td>
                        <td class="text-right">Voir</td>
                        <td class="text-right">Supprimer</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection