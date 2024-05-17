<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tree extends Controller
{
    public function index()
    {
        return 'Welcome to the first tree';
    }

    public function show($id)
    {
        return 'Tree: '.$id;
    }
}
