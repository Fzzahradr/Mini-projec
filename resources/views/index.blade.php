@extends('admin')

@section('content')
<h2>Data Students</h2>

<form action="/search" method="GET">
    <input type="text" name="query" placeholder="Rechercher par nom..." />
    <button type="submit" class="btn btn-primary">Rechercher </button>
</form>

<a href="/generate-pdf" class="btn btn-outline-warning"> PDF</a>
<a href="/generate-csv" class="btn btn-outline-dark">CSV</a>

<a href="/ajouter" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Filière</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tables as $etu)
        <tr>
            <td>{{ $etu->id }}</td>
            <td>{{ $etu->Nom }}</td>
            <td>{{ $etu->Prénom }}</td>
            <td>{{ $etu->Email }}</td>
            <td>{{ $etu->Date_de_naissance }}</td>
            <td>{{ $etu->Filière }}</td>
            <td>{{ $etu->Téléphone }}
            <td>
                <a href="/update-etudiant/{{ $etu->id }} "class="btn btn-success">Modifier</a>
                <a href="/delete-etudiant/{{ $etu->id }} " class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection