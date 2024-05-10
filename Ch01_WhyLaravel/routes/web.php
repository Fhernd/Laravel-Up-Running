<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

use App\Models\Greeting;

Route::get('/', function () {
    return 'Hello, World!';
});

Route::get('/welcome', [WelcomeController::class, 'index']);


Route::get('/greeting-create', function () {
    $greeting = new Greeting();
    $greeting->body = 'Hello, World!';
    $greeting->save();
    return 'Greeting created';
});
