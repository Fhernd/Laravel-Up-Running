<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySampleResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'MySampleResourceController@index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'MySampleResourceController@create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'MySampleResourceController@store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'MySampleResourceController@show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'MySampleResourceController@edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'MySampleResourceController@update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'MySampleResourceController@destroy';
    }
}
