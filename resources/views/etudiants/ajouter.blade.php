@extends('layouts.app')

@section('contenu')
<h1>Ajouter un étudiant</h1>

<form method="POST" action="{{ route('etudiants.store') }}">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="classe">Classe :</label>
    <input type="text" id="classe" name="classe" required>

    <button type="submit">Ajouter</button>
</form>
@endsection
