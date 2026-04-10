<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

// Accueil
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', [HomeController::class, 'index']);

// Dashboard (Une seule définition suffit)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Routes protégées par Auth
Route::middleware('auth')->group(function () {
    
    // Profil (Breeze utilise ces 3 là)
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Projets
    Route::get('/projets', [ProjectController::class, 'index'])->name('projects.index');
    Route::post('/projets', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projets/{id}', [ProjectController::class, 'show'])->name('projects.show');

    // Tickets
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

    // Déconnexion (Si tu veux garder ton AuthController personnalisé)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';