<?php

use App\Http\Controllers\Main\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', ContactController::class);
