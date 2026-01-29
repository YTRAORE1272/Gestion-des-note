@extends('layouts.app')

@section('contenu')
<h2>Étudiant ajouté avec succès</h2>

<p><strong>Nom :</strong> {{ $nouvelEtudiant['nom'] }}</p>
<p><strong>Prénom :</strong> {{ $nouvelEtudiant['prenom'] }}</p>
<p><strong>Classe :</strong> {{ $nouvelEtudiant['classe'] }}</p>

<h3>Évaluations</h3>
<ul>
@foreach($nouvelEtudiant['evaluations'] as $evaluation)
    <li>{{ $evaluation['matiere'] }} : {{ $evaluation['note'] }}/20</li>
@endforeach
</ul>
@endsection
