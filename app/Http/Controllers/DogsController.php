<?php

namespace App\Http\Controllers;

use App\Models\Dogs;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dogs', [
        'dogs' => Dogs::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dogs $dogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dogs $dogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dogs $dogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dogs $dogs)
    {
        //
    }
}
