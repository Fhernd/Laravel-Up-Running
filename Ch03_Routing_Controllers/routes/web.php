<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('users/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('users/{id}/{name}', function ($id, $name) {
    return view('users', ['id' => $id, 'name' => $name]);
});

Route::get('product/{id}', function ($id) {
    return 'Product '.$id;
})->where('id', '[0-9]+');

Route::group([], function() {
    Route::get('hello', function() {
        return 'Hello';
    });

    Route::get('world', function() {
        return 'world';
    });
});

Route::prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return 'Dashboard - Home';
    });

    Route::get('users', function() {
        return 'Dashboard - Users';
    });
});

Route::name('users.')->prefix('users')->group(function() {
    Route::name('comments.')->prefix('comments')->group(function() {
        Route::get('{id}', function() {
            return ['C1', 'C2', 'C3'];
        })->name('show');
    });
});
