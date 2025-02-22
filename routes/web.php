<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('pagina', function(){
 return view('pagina');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
