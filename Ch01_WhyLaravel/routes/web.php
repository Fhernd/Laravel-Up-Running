<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return 'Hello, World!';
});

Route::get('/welcome', [WelcomeController::class, 'index']);
