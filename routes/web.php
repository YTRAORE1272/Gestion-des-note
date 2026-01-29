<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EtudiantController;

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('/etudiants/ajouter', [EtudiantController::class, 'ajouter'])->name('etudiants.ajouter');
Route::post('/etudiants/enregistrer', [EtudiantController::class, 'enregistrer'])->name('etudiants.enregistrer');
Route::get('/etudiants/{id}', [EtudiantController::class, 'details'])->name('etudiants.details');
