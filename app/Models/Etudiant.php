<?php

namespace App\Models;

class Etudiant
{
    public $nom;
    public $prenom;
    public $classe;
    public $evaluations;

    public function __construct($nom, $prenom, $classe, $evaluations = [])
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->classe = $classe;
        $this->evaluations = $evaluations;
    }
}
