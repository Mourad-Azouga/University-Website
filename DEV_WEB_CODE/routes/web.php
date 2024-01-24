<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ResponsableFiliereController;
use App\Http\Controllers\ChefDepartementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResponsablePedagogiqueController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Hadi dial l home 
Route::get('/', [HomeController::class, 'index'])->name('home');

#Hado dial login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

#Hado dial dashboards
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

#Hado dial profiles
Route::get('/profile', [ProfileController::class, 'showProfile']);

#Hado dial emploi
Route::get('/emploi', [EmploiController::class, 'showEmploi']);

#Hadi bach prof ydir annonce n les etudiants dialo
Route::post('/professor/add-announcement', [ProfessorController::class, 'addAnnouncement'])->name('professor.addAnnouncement');

#Hadi bach responsable filiere ydir annonce n les etudiant li fdak lfiliere
Route::post('/responsible-filiere/add-announcement', [ResponsableFiliereController::class, 'addAnnouncement'])->name('responsible-filiere.addAnnouncement');

#hadi n chef departement bach yzid annonce, either n students wla n home page
Route::post('/chef-departement/add-announcement', [ChefDepartementController::class, 'addAnnouncement'])->name('chef-departement.addAnnouncement');

#hadi n etudiant bach ydir demande
Route::post('/etudiant/add-demande', [StudentController::class, 'addDemande'])->name('etudiant.addDemande');

#hadi bach professeur/repo y updati demande
Route::put('/update-demande-status/{demande}', [DashboardController::class, 'updateDemandeStatus'])->name('update-demande-status');

#Hadi bach respo pedagogique ydir alter f emploi
Route::post('/responsable-pedagogique/make-reservation', [ResponsablePedagogiqueController::class, 'makeReservation'])->name('responsable-pedagogique.make-reservation');

#Hadi bach chef departement ydir reservations f emploi dial les salles dialo
Route::post('/chef-departement/make-reservation', [ChefDepartementController::class, 'makeReservation'])->name('chef-departement.make-reservation');

