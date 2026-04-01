<?php

use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('alunos', AlunoController::class);
});

require __DIR__.'/auth.php';