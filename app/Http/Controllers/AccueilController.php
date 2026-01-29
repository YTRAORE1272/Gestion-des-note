<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AccueilController extends Controller
{
    public function index()
    {
        return view('etudiants.accueil');
    }
}
