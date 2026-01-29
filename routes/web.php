<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::prefix('etudiants')->group(function () {
    Route::get('/', [EtudiantController::class, 'index'])->name('etudiants.index');
    Route::get('/ajouter', [EtudiantController::class, 'create'])->name('etudiants.create');
    Route::post('/ajouter', [EtudiantController::class, 'store'])->name('etudiants.store');
    Route::get('/{id}', [EtudiantController::class, 'show'])->name('etudiants.show');
});
