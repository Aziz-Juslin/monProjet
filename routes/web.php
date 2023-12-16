<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Image_ecole;
use App\Models\Info_ecole;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes        cd c:\xampp\htdocs\Dsix
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/2-six', [App\Http\Controllers\PubliqueController::class, 'index'])->name('ebandeli');
Route::get('/ecoles', [App\Http\Controllers\PubliqueController::class, 'ecole'])->name('ecole');
Route::get('/2-six/contact', [App\Http\Controllers\PubliqueController::class, 'contact'])->name('contact');
Route::get('/2-six/apropo', [App\Http\Controllers\PubliqueController::class, 'apropo'])->name('apropo');
Route::get('/2-six/eleves', [App\Http\Controllers\PubliqueController::class, 'eleve'])->name('eleve');
Route::get('/ecole/{id}/{ecole}', [App\Http\Controllers\PubliqueController::class, 'voir_ecole'])->name('voir_ecole');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gestionnaire', [App\Http\Controllers\Gestion\GestionController::class, 'index'])->name('gestionnaire');
 