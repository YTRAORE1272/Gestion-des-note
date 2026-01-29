<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    private $etudiants = [
        [
            'id' => 1,
            'nom' => 'DIA',
            'prenom' => 'Mamadou',
            'classe' => '2A',
            'evaluations' => [
                ['matiere' => 'Mathématiques', 'note' => 15],
                ['matiere' => 'Français', 'note' => 17],
            ]
        ],
        [
            'id' => 2,
            'nom' => 'BA',
            'prenom' => 'Aminata',
            'classe' => '1B',
            'evaluations' => [
                ['matiere' => 'Mathématiques', 'note' => 12],
                ['matiere' => 'Français', 'note' => 14],
            ]
        ],
    ];

    public function index()
    {
        return view('etudiants.index', [
            'etudiants' => $this->etudiants
        ]);
    }

    public function ajouter()
    {
        return view('etudiants.ajouter');
    }

    public function enregistrer(Request $request)
    {
        $nouvelEtudiant = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'classe' => $request->classe,
            'evaluations' => [
                ['matiere' => $request->matiere1, 'note' => $request->note1],
                ['matiere' => $request->matiere2, 'note' => $request->note2],
            ]
        ];

        return view('etudiants.enregistrer', compact('nouvelEtudiant'));
    }

    public function details($id)
    {
        $etudiant = collect($this->etudiants)->firstWhere('id', $id);

        if (!$etudiant) {
            return redirect()->route('etudiants.index');
        }

        return view('etudiants.details', compact('etudiant'));
    }
}
