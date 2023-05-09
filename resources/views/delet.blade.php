@extends('admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Lien vers les fichiers CSS de Bootstrap (version en ligne) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
        @foreach($deletedTables as $etu)
        <tr>
            <td>{{ $etu->id }}</td>
            <td>{{ $etu->Nom }}</td>
            <td>{{ $etu->Prénom }}</td>
            <td>{{ $etu->Email }}</td>
            <td>{{ $etu->Date_de_naissance }}</td>
            <td>{{ $etu->Filière }}</td>
            <td>{{ $etu->Téléphone }}
           
        </tr>
        @endforeach
    </tbody>
    </table>

    <!-- Lien vers les fichiers JavaScript de Bootstrap (version en ligne) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection