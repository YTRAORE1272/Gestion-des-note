<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(Request $request)
    {
        $etudiants = $request->session()->get('etudiants', []);
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    public function show(Request $request, $id)
    {
        $etudiants = $request->session()->get('etudiants', []);
        $etudiant = $etudiants[$id] ?? null;
        if (!$etudiant) {
            abort(404);
        }
        return view('etudiants.details', ['etudiant' => $etudiant]);
    }

    public function create()
    {
        return view('etudiants.ajouter');
    }

    public function store(Request $request)
    {
        $etudiants = $request->session()->get('etudiants', []);
        $etudiants[] = new Etudiant(
            $request->input('nom'),
            $request->input('prenom'),
            $request->input('classe'),
            []
        );
        $request->session()->put('etudiants', $etudiants);
        return redirect()->route('etudiants.index');
    }
}
