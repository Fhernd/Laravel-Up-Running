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
