<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

// Page d'accueil (publique)
Route::get('/', function () {
    return view('home');
})->name('home');

// Routes protégées par Breeze
Route::middleware(['auth', 'verified'])->group(function () {

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

    // Profil (Breeze fournit déjà un ProfileController, voir note ci-dessous)
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

// Routes Breeze (login, register, reset password, etc.)
require __DIR__.'/auth.php';