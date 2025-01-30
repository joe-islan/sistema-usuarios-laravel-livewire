<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserList;

Route::get('/', function () {
    return redirect()->route('register');
});

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/acessar-como/{user}', [DashboardController::class, 'acessarComo'])->name('acessarComo');
});
