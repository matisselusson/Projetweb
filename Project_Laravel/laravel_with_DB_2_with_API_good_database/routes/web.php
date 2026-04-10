<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContractController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    
    Route::get('/projets', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projets', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projets/{id}', [ProjectController::class, 'show'])->name('projects.show');

    Route::get('/contrats', [ContractController::class, 'index'])->name('contrats.index');
    Route::get('/contrats/create', [ContractController::class, 'create'])->name('contrats.create');
    Route::post('/contrats', [ContractController::class, 'store'])->name('contrats.store');
    Route::get('/contrats/{id}', [ContractController::class, 'show'])->name('contrats.show');

    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('/tickets/create2', [TicketController::class, 'create2'])->name('tickets.create2');
    Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

});

require __DIR__.'/auth.php';