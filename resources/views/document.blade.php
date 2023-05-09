<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
         
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>

    <table>
        <thead>
            <tr>
            <th >#</th>
            <th >Nom</th>
            <th >Prénom</th>
            <th >Email</th>
            <th >Date de naissance</th>
            <th >Filière</th>
            <th >Téléphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($content as $item)
            <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->Nom }}</td>
            <td>{{ $item->Prénom }}</td>
            <td>{{ $item->Email }}</td>
            <td>{{ $item->Date_de_naissance }}</td>
            <td>{{ $item->Filière }}</td>
            <td>{{ $item->Téléphone }}
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
