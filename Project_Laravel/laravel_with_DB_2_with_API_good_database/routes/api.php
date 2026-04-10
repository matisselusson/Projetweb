<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::post('/tickets', [TicketController::class, 'storeApi'])->name('api.tickets.store');
Route::get('/tickets', [TicketController::class, 'showApi'])->name('api.tickets.show');