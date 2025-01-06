<?php

use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {    
    return view('auth.register');
})->name('register');

Route::get('/MinhasCompras', function () {    
    return view('minhas-compras');
})->name('minhas-compras');

Route::get('/Loja', function () {
    return view('loja');
})->name('loja');

Route::get('/MinhasAssinaturas', function () {
    return view('minhas-assinaturas');
})->name('minhas-assinaturas');

Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');