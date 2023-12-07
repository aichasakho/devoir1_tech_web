<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/apprenant', function () {
    return view('apprenant');
});
Route::get('/apprenants',[ApprenantController::class,'index']);
Route::get('/ajouter',[ApprenantController::class,'ajouter_etudiant']);
Route::post('/ajouter/traitement',[ApprenantController::class,'ajouter_etudiant_traitement']);



Route::get('/formation',[FormationController::class,'index']);


