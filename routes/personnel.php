<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
//Middleware pour redirecte vers les données de l'universite

Route::get('/personnel', [App\Http\Controllers\Personnel\PersonnelController::class, 'personnel'])->name('personnel_principal');
Route::get('/personnel-fictif', [App\Http\Controllers\Personnel\PersonnelController::class, 'personnel_fictif'])->name('personnel_fictif');
Route::get('/personnel-abandon', [App\Http\Controllers\Personnel\PersonnelController::class, 'personnel_abandon'])->name('personnel_abandon');
Route::get('/ajouter-personnel', [App\Http\Controllers\Personnel\PersonnelController::class, 'create'])->name('ajout_personnel');
Route::post('/store-personnel', [App\Http\Controllers\Personnel\PersonnelController::class, 'store'])->name('personnel_store');
Route::get('/mes-personnel', [App\Http\Controllers\Personnel\PersonnelController::class, 'index'])->name('personnel');
Route::get('/{id}', [App\Http\Controllers\Personnel\PersonnelController::class, 'destroy'])->name('delete_personnel');
Route::get('/personnel/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'show'])->name('voir_personnel');
Route::get('/personnel/info/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'personnel_info'])->name('personnel_info');
Route::post('/personnel/s/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'update_photo_personnel'])->name('update_photo_personnel');
Route::post('/personnel/in/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'update'])->name('update_info_personnel');
Route::get('/personnel/photo/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'personnel_photo'])->name('personnel_photo');

Route::get('/personnel/ac/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'active'])->name('personnel_active');
Route::get('/personnel/ds/{id}/{nom}-{post_nom}-{prenom}', [App\Http\Controllers\Personnel\PersonnelController::class, 'desactive'])->name('personnel_desactive');