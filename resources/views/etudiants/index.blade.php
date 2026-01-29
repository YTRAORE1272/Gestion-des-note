@extends('layouts.app')

@section('contenu')
<h1>Liste des étudiants</h1>
<ul>
    @foreach ($etudiants as $id => $etudiant)
        <li>
            <a href="{{ route('etudiants.show', $id) }}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</a>
        </li>
    @endforeach
</ul>
<a href="{{ route('etudiants.create') }}">Ajouter un étudiant</a>
@endsection
