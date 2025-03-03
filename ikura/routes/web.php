<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function (){
    return view('layouts.profile');
});

Route::post('/index.php/confirm', 
[ContactController::class, 'index'])->name('index');

Route::post('/index.php/complete', 
[ContactController::class, 'index2'])->name('index2');