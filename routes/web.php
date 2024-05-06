<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dados-profissionais', function() {
    return view('dashboard');
})->name('dados-profissionais');

Route::get('/dados-pessoais', function() {
    return view('dashboard');
})->name('dados-pessoais');

Route::get('/endereco', function() {
    return view('dashboard');
})->name('endereco');

Route::get('/academico', function() {
    return view('dashboard');
})->name('academico');

Route::get('/unidades', function() {
    return view('dashboard');
})->name('unidades');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
