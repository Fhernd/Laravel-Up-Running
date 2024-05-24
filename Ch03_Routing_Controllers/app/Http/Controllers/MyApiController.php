<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'MyApiController@index';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'MyApiController@store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'MyApiController@show';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'MyApiController@update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'MyApiController@destroy';
    }
}
