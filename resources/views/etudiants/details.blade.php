@extends('layouts.app')

@section('contenu')
<h1>Détails de l'étudiant</h1>
<p>Nom : {{ $etudiant->nom }}</p>
<p>Prénom : {{ $etudiant->prenom }}</p>
<p>Classe : {{ $etudiant->classe }}</p>
<h2>Évaluations</h2>
<ul>
    @foreach ($etudiant->evaluations as $evaluation)
        <li>{{ $evaluation['matiere'] }} : {{ $evaluation['note'] }}/20</li>
    @endforeach
</ul>
<a href="{{ route('etudiants.index') }}">Retour à la liste</a>
@endsection
