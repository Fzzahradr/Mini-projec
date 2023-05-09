<!DOCTYPE html>
<html>

<head>
    <title>Page d'administration</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styles personnalisés */
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: black;
            /* Couleur bleue */
            padding: 10px;
            color: #fff;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        nav ul li a i {
            margin-right: 5px;
        }

        main {
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul class="d-flex">
                <li><a href="{{ route('admin') }}"><i class="bi bi-house-door-fill"></i> Accueil</a></li>
                <li><a href="{{ route('profile') }}"><i class="bi bi-person-fill"></i> Profil</a></li>
                <li><a href="{{ route('liste') }}"><i class="bi bi-person-fill"></i> delete record</a></li>
                <li><a href="{{ route('pdf') }}"><i class="bi bi-person-fill"></i> pdf</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>