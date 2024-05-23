<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return 'Hello from TaskController@index';
    }

    public function show(string $id)
    {
        return 'Task '.$id;
    }

    public function create()
    {
        return view('tasks.create');
    }
}
