<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Notes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav a { margin-right: 15px; }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; }
    </style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav>
    <a href="{{ route('accueil') }}">Accueil</a>
    <a href="{{ route('etudiants.index') }}">Liste des étudiants</a>
    <a href="{{ route('etudiants.create') }}">Ajouter un étudiant</a>
</nav>

<hr>

<div class="container">
    @yield('contenu')
</div>


</body>
</html>
