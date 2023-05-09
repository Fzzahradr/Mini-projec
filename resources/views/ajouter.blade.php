<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>
<h3>Add a Student</h3>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
<form action="/ajouter/traitement" method="post">
    @csrf
    
    <label for="Nom">Nom:</label>
    <input type="text" id="Nom" name="Nom" required><br><br>

    <label for="Prénom">Prénom:</label>
    <input type="text" id="Prénom" name="Prénom" required><br><br>

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" required><br><br>

    <label for="Date_de_naissance">Date de naissance:</label>
    <input type="date" id="Date_de_naissance" name="Date_de_naissance" required><br><br>

    <label for="Filière">Filière:</label>
    <input type="text" id="Filière" name="Filière" required><br><br>

    <label for="Téléphone">Téléphone:</label>
    <input type="tel" id="Téléphone" name="Téléphone" required><br><br>

    <input type="submit" value="Envoyer">
  </form>
</body>
</html>