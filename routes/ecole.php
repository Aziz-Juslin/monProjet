<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();
//Middleware pour redirecte vers les données de l'universite ta grace prend en charge nos insufisances
// cd c:\xampp\htdocs\Dsix
//-------------------------------------Ecole------------------------------------------------------------------
Route::get('/infos', [App\Http\Controllers\Ecole\InfoController::class, 'create'])->name('info_ecole');
Route::post('/info-store', [App\Http\Controllers\Ecole\InfoController::class, 'store'])->name('info_store');
Route::get('/information-ecole', [App\Http\Controllers\Ecole\InfoController::class, 'show'])->name('info_ecole_show');
Route::get('/photo-ecole/{id}', [App\Http\Controllers\Ecole\InfoController::class, 'edit'])->name('photo_ecole_show');
Route::post('/info-update/{id}', [App\Http\Controllers\Ecole\InfoController::class, 'update'])->name('info_update');
Route::post('/photo-update/{id}', [App\Http\Controllers\Ecole\InfoController::class, 'imageEcole'])->name('photo_update');

Route::get('/gestionnaires', [App\Http\Controllers\Ecole\GestionnaireController::class, 'create'])->name('gestion_ecole');
Route::post('/store_gestion', [App\Http\Controllers\Ecole\GestionnaireController::class, 'store_gestion'])->name('store_gestion');
Route::get('/gestion-update/{id}', [App\Http\Controllers\Ecole\GestionnaireController::class, 'update'])->name('gestion_update');
Route::get('/gestionnaire/{id}', [App\Http\Controllers\Ecole\GestionnaireController::class, 'show'])->name('gestion_show');
Route::get('/gestionnaire-info', [App\Http\Controllers\Ecole\GestionnaireController::class, 'edit'])->name('gestion_info');

Route::get('/infos-admin', [App\Http\Controllers\Ecole\AdminController::class, 'create'])->name('info_admin');
Route::post('/store_gestionnaire', [App\Http\Controllers\Ecole\AdminController::class, 'store_gestionnaire'])->name('store_gestionnaire');
Route::post('/store_admin', [App\Http\Controllers\Ecole\AdminController::class, 'store'])->name('store_admin');
Route::post('/update-admin/{id}', [App\Http\Controllers\Ecole\AdminController::class, 'update'])->name('update_admin');
Route::post('/admin-photo/{id}', [App\Http\Controllers\Ecole\AdminController::class, 'imageAdmin'])->name('mod_photo_admin');
Route::get('/info-super-administrateur', [App\Http\Controllers\Ecole\AdminController::class, 'show'])->name('admin_show');
Route::get('/edit-photo-admin/{id}', [App\Http\Controllers\Ecole\AdminController::class, 'edit'])->name('edit_photo_admin');

Route::post('/update/{id}', [App\Http\Controllers\Ecole\ImagesController::class, 'update'])->name('image_update');
Route::get('/admin-destroy/{id}', [App\Http\Controllers\Ecole\ImagesController::class, 'destroy'])->name('admin_destroy');
Route::get('/ecole-destroy/{id}', [App\Http\Controllers\Ecole\ImagesController::class, 'destroy_ecole'])->name('ecole_destroy');
Route::get('/edit-photo/{id}', [App\Http\Controllers\Ecole\ImagesController::class, 'edit'])->name('image_edit');

Route::get('/option-oraganise', [App\Http\Controllers\Ecole\OptionController::class, 'index'])->name('option_principal');
Route::get('/option/{slug}', [App\Http\Controllers\Ecole\CycleController::class, 'option'])->name('option');
Route::get('/option/{slug}/eleve-fictif', [App\Http\Controllers\Ecole\OptionController::class, 'eleve_fictif_option'])->name('eleve_fictif_option');
Route::get('/option/{slug}/eleve-abandon', [App\Http\Controllers\Ecole\OptionController::class, 'eleve_abandon_option'])->name('eleve_abandon_option');

Route::get('/options', [App\Http\Controllers\Ecole\OptionController::class, 'create'])->name('option_ecole');
Route::post('/option-store', [App\Http\Controllers\Ecole\OptionController::class, 'store'])->name('option_store');
Route::get('/option-selectionner', [App\Http\Controllers\Ecole\OptionController::class, 'show'])->name('option_show');
Route::get('/{id}option', [App\Http\Controllers\Ecole\OptionController::class, 'destroy'])->name('option_destroy');

Route::get('/cycle-organise', [App\Http\Controllers\Ecole\CycleController::class, 'cycle_principal'])->name('cycle_principal');
Route::get('/cycles', [App\Http\Controllers\Ecole\CycleController::class, 'create'])->name('cycle_ecole');
Route::post('/cycle-store', [App\Http\Controllers\Ecole\CycleController::class, 'store'])->name('cycle_store');
Route::get('/cycle-selectionner', [App\Http\Controllers\Ecole\CycleController::class, 'show'])->name('cycle_show');
Route::get('/{id}cycle', [App\Http\Controllers\Ecole\CycleController::class, 'destroy'])->name('cycle_destroy');
Route::get('/cycle/{slug}', [App\Http\Controllers\Ecole\CycleController::class, 'index'])->name('cycle');
Route::get('/cycle/{slug}/eleve-abandon', [App\Http\Controllers\Ecole\CycleController::class, 'eleve_abandon'])->name('eleve_abandon');
Route::get('/cycle/{slug}/eleve-fictif', [App\Http\Controllers\Ecole\CycleController::class, 'eleve_actif'])->name('eleve_actif');
Route::get('/cycle/{slug}/classe', [App\Http\Controllers\Ecole\CycleController::class, 'classe'])->name('classe');
Route::get('/cycle/{slug}/imprimer', [App\Http\Controllers\Ecole\CycleController::class, 'imprimer'])->name('imprimer');

//--------------------------------------FIN------------------------------------------------------------------

Route::get('/finance/kumba', [App\Http\Controllers\Finance\FinanceController::class, 'fina_kumba'])->name('fina_kumba');
Route::post('/fina', [App\Http\Controllers\Finance\FinanceController::class, 'store_kumba'])->name('store_kumba');
Route::post('/fin', [App\Http\Controllers\Finance\FinanceController::class, 'kumba_connexion'])->name('kumba_connexion');
Route::get('/fd/{id}', [App\Http\Controllers\Finance\FinanceController::class, 'deconnexion'])->name('deconnexion');

Route::group([
    'middleware' => 'App\Http\Middleware\Finance'],
    function(){
Route::get('/finance', [App\Http\Controllers\Finance\FinanceController::class, 'finance'])->name('modalite_frais');
Route::get('/frais-scolaires', [App\Http\Controllers\Finance\FinanceController::class, 'journal_frais'])->name('journal_frais');
Route::get('/frais-scolaires/trimestre', [App\Http\Controllers\Finance\FinanceController::class, 'trimestre'])->name('trimestre');
Route::get('/s_modalite/{id}', [App\Http\Controllers\Finance\FinanceController::class, 'destroy'])->name('destroy_moda');
Route::post('/franc_frais/{id}{classe}', [App\Http\Controllers\Finance\FinanceController::class, 'franc_frais'])->name('slide_frais');
Route::post('/dola_frais/{id}', [App\Http\Controllers\Finance\FinanceController::class, 'dola_frais'])->name('dola_frais');
Route::get('/eleve/reçu-de-paiement/{id}/{num_recu}', [App\Http\Controllers\Finance\FinanceController::class, 'recu_imprime'])->name('recu_imprime');
Route::get('/recu_sup/{id}', [App\Http\Controllers\Finance\FinanceController::class, 'delete_recu'])->name('delete_recu');
Route::get('/recu-de-paiement-frais-scolaires-pdate/{id}/{num_recu}', [App\Http\Controllers\Finance\FinanceController::class, 'edit_recu'])->name('edit_recu');
Route::post('/updat_recu/{num_recu}', [App\Http\Controllers\Finance\FinanceController::class, 'update_recu'])->name('update_recu');
Route::get('/all-recus', [App\Http\Controllers\Finance\FinanceController::class, 'all_recu']);

Route::get('/finance/journal-de-caisse', [App\Http\Controllers\Finance\FinanceController::class, 'journal_caisse'])->name('journal_caisse');
Route::get('/finance/rapport/frais-scolaires', [App\Http\Controllers\Finance\FinanceController::class, 'rapport_frais_scolaire'])->name('rapport_frais_scolaire');
Route::get('/rapportFraisScoliares', [App\Http\Controllers\Finance\FinanceController::class, 'rapportFraisScoliares'])->name('rapportFraisScoliares');
Route::get('/rapportAutreFrais', [App\Http\Controllers\Finance\FinanceController::class, 'rapportAutreFrais'])->name('rapportAutreFrais');

//-----------------modalité des frais scolaires ------------------------------------------------------------------------------------------------------------------
Route::get('/frais-scolaires/modalités-de-paiement', [App\Http\Controllers\Finance\ModaliteController::class, 'modalité_frais'])->name('modalité_frais');
Route::post('/store_modalite', [App\Http\Controllers\Finance\ModaliteController::class, 'store_modalite'])->name('store_modalite');
Route::get('/frais-scolaires/modalite/{slug}', [App\Http\Controllers\Finance\ModaliteController::class, 'modalite_fixe'])->name('modalite_fixe');
/////////////////////////////////////////////////////AUTRE FRAIS///////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/autres-frais/journal-de-paiement', [App\Http\Controllers\Finance\FinanceController::class, 'autre_frais'])->name('autre_frais');
Route::get('/rapport/autres-frais', [App\Http\Controllers\Finance\FinanceController::class, 'rapport_autre_frais'])->name('rapport_autre_frais');
//////////////////////////////////////////INVOICE///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/invoice-rapport-frais-scolaire',
        [App\Http\Controllers\Finance\FinanceController::class,
        'invoice_rapport_frais_scolaire'])->name('invoice_rapport_frais_scolaire');

});
