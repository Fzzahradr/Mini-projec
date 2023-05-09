<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .card {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        
        .card-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .invalid-feedback {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .btn-link {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
        }
        
        .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body> <h3>Edit Student</h3>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
   <!-- resources/views/tablesdiant/update.blade.php -->

   <form action="/update/traitement" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $tables->id }}">
    
    <label for="Nom">Nom:</label>
    <input type="text" id="Nom" name="Nom" value="{{ $tables->Nom}}" required><br><br>

    <label for="Prénom">Prénom:</label>
    <input type="text" id="Prénom" name="Prénom" value="{{ $tables->Prénom }}" required><br><br>

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" value="{{$tables->Email}}" required><br><br>

    <label for="Date_de_naissance">Date de naissance:</label>
    <input type="date" id="Date_de_naissance" name="Date_de_naissance" value="{{$tables->Date_de_naissance}}" required><br><br>

    <label for="Filière">Filière:</label>
    <input type="text" id="Filière" name="Filière" value="{{$tables->Filière}}" required><br><br>

    <label for="Téléphone">Téléphone:</label>
    <input type="tel" id="Téléphone" name="Téléphone" value="{{ $tables->Téléphone}}" required><br><br>

    <input type="submit" value="Envoyer">
</form>
</body>
</html>
