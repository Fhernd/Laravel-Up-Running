<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyApiController;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MySampleResourceController;
use App\Models\Task;

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

Route::name('usuarios.')->prefix('usuarios')->group(function() {
    Route::name('comments.')->prefix('comments')->group(function() {
        Route::get('{id}', function() {
            return ['C1', 'C2', 'C3'];
        })->name('show');
    });
});

Route::controller(TreeController::class)->prefix('tree')->group(function() {
    Route::get('/', 'index');
    Route::get('{id}', 'show');
});

Route::fallback(function () {
    return response()->json(['message' => 'Not Found!!!'], 404);
});

Route::get('home', function () {
    return view('home')->with('message', 'Welcome to the home page!');
})->name('home');


Route::get('/tasks/create',[ TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks', [ TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [ TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{id}', [ TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{id}/edit', [ TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{id}', [ TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [ TaskController::class, 'destroy'])->name('tasks.destroy');

Route::resource('mysample', MySampleResourceController::class);

Route::apiResource('myapi', MyApiController::class);

Route::get('task/single/{task}', function (Task $task) {
    return view('tasks.showsingle')->with('task', $task);
});
