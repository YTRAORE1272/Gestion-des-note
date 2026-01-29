@extends('layouts.app')

@section('contenu')
<h2>Liste des étudiants</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Classe</th>
        <th>Détails</th>
    </tr>

    @foreach($etudiants as $etudiant)
    <tr>
        <td>{{ $etudiant['nom'] }}</td>
        <td>{{ $etudiant['prenom'] }}</td>
        <td>{{ $etudiant['classe'] }}</td>
        <td>
            <a href="{{ route('etudiants.details', $etudiant['id']) }}">Voir</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
