<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
//Middleware pour redirecte vers les données de l'universite

Route::get('/eleve', [App\Http\Controllers\Eleve\EleveController::class, 'eleve'])->name('eleve');
Route::get('/eleve-quitter', [App\Http\Controllers\Eleve\EleveController::class, 'eleve_quitter'])->name('eleve_quitter');
Route::get('/ajouter-eleve', [App\Http\Controllers\Eleve\EleveController::class, 'index'])->name('ajout_eleve');
Route::post('/store', [App\Http\Controllers\Eleve\EleveController::class, 'store'])->name('store_eleve');
Route::post('/update-eleve/{id}', [App\Http\Controllers\Eleve\EleveController::class, 'update'])->name('update_eleve');
Route::post('/update-photo/{id}', [App\Http\Controllers\Eleve\EleveController::class, 'update_photo_eleve'])->name('update_photo_eleve');
Route::get('/update-active/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'active'])->name('active');
Route::get('/update-desactive/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'desactive'])->name('desactive');

Route::get('/repertoire-eleves', [App\Http\Controllers\Eleve\EleveController::class, 'create'])->name('eleve_liste');

Route::get('/eleve/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'show'])->name('eleve_show');
Route::get('/eleve/photo/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'eleve_photo'])->name('eleve_photo');
Route::get('/eleve/information/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'eleve_info'])->name('eleve_info');
Route::get('/{id}eleve_sup', [App\Http\Controllers\Eleve\EleveController::class, 'destroy'])->name('eleve_sup');
Route::get('/eleve/paiement-trimestriel-de-frais-scolaires/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'frais_eleve'])->name('frais_eleve');
Route::get('/recu-de-paiement-frais-scolaires/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'eleve_recu'])->name('eleve_recu');
Route::get('/eleve/deplacement/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'deplace_eleve'])->name('deplace_eleve');
Route::get('/elev/{id}/{code_eleve}', [App\Http\Controllers\Eleve\EleveController::class, 'emplacement_eleve'])->name('emplacement_eleve');
///-----------------------------------autre frais-----------------------------------------------------------------------------------------------------------------
Route::get('/autre-frais/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'autreFrais'])->name('autreFrais');
Route::post('/autre-frais-store/{id}', [App\Http\Controllers\Eleve\EleveController::class, 'autre_frais_store'])->name('autre_frais_store');
Route::get('/{id}deleteautre', [App\Http\Controllers\Eleve\EleveController::class, 'deleteautre'])->name('deleteautre');
Route::get('/luka_recu/{id}/{slug}-{post}-{prenom}', [App\Http\Controllers\Eleve\EleveController::class, 'luka_recu'])->name('luka_recu');
Route::get('/recu_par_annee/{id}/{annee_frais}', [App\Http\Controllers\Eleve\EleveController::class, 'luka_recu_annee'])->name('luka_recu_annee');
Route::get('/luka_autreFrais_par_categorie/{id}/{categorie}', [App\Http\Controllers\Eleve\EleveController::class, 'luka_autreFrais_par_categorie'])->name('luka_autreFrais_par_categorie');
