@extends('layouts.app')

@section('contenu')
<h2>Ajouter un étudiant</h2>

<form method="POST" action="{{ route('etudiants.enregistrer') }}">
    @csrf

    Nom : <input type="text" name="nom" required><br><br>
    Prénom : <input type="text" name="prenom" required><br><br>
    Classe : <input type="text" name="classe" required><br><br>

    <h3>Évaluations</h3>

    Matière 1 : <input type="text" name="matiere1" required><br>
    Note 1 : <input type="number" name="note1" required><br><br>

    Matière 2 : <input type="text" name="matiere2" required><br>
    Note 2 : <input type="number" name="note2" required><br><br>

    <button type="submit">Enregistrer</button>
</form>
@endsection
