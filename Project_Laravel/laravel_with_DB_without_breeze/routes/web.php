<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Page d'accueil

Route::get('/', function () {
    return view('home');
})->name('home');
// Authentification

Route::get('/connexion', [AuthController::class, 'showLogin'])->name('login');
Route::post('/connexion', [AuthController::class, 'login']);
Route::get('/verification-email', [AuthController::class, 'showForgotPassword'])->name('forgot-password');
Route::post('/verification-email', [AuthController::class, 'sendResetLink']);
Route::get('/deconnexion', [AuthController::class, 'logout'])->name('logout');

// Tableau de bord
Route::get('/tableaudebord', [DashboardController::class, 'index'])->name('dashboard');

// Projets
Route::get('/projets', [ProjectController::class, 'index'])->name('projects.index');
Route::post('/projets', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projets/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Tickets
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

// Profil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
