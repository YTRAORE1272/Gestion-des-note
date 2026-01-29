@extends('layouts.app')

@section('contenu')
<h2>Détails de l'étudiant</h2>

<p>Nom : {{ $etudiant['nom'] }}</p>
<p>Prénom : {{ $etudiant['prenom'] }}</p>
<p>Classe : {{ $etudiant['classe'] }}</p>

<h3>Évaluations</h3>
<ul>
@foreach($etudiant['evaluations'] as $evaluation)
    <li>{{ $evaluation['matiere'] }} : {{ $evaluation['note'] }}/20</li>
@endforeach
</ul>
@endsection
