<?php
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\DelegueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/', function () { return view('home');});

#Hado dial login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// routes/web.php

Route::group(['middleware' => 'auth'], function () {
    Route::get('/etudiant-dashboard', [EtudiantController::class, 'index'])->name('etudiant.dashboard');
    Route::get('/delegue-dashboard', [DelegueController::class, 'index'])->name('delegue.dashboard');
    // Add routes for other roles
});


