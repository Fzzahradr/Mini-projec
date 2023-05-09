@extends('admin')

@section('content')
@if ($results->count() > 0)
    <h2>Résultats de la recherche :</h2>
    <ul>
       


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
           
        </tr>
    </thead>
    <tbody>
    @foreach ($results as $result)
        <tr>
            <td>{{ $result->id }}</td>
            <td>{{ $result->Nom }}</td>
            <td>{{ $result->Prénom }}</td>
            <td>{{ $result->Email }}</td>
            <td>{{ $result->Date_de_naissance }}</td>
            <td>{{ $result->Filière }}</td>
            <td>{{ $result->Téléphone }}
            
        </tr>
        @endforeach
    </tbody>
</table>

      
    </ul>
@else
    <p>Aucun résultat trouvé.</p>
@endif
@endsection