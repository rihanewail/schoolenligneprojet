<?php

namespace App\Http\Controllers;

use App\Models\enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('enseignant.index');
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
    public function show(enseignant $enseignant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enseignant $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, enseignant $enseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enseignant $enseignant)
    {
        //
    }
}
