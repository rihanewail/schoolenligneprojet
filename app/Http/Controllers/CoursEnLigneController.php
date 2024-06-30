<?php

namespace App\Http\Controllers;

use App\Models\CoursEnLigne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursEnLigneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return view('enseignant.demendeEvent') ;   }


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
        $request->validate([
            'description' => 'required|string|max:255',
            'duree' => 'required|string|max:255',
            'date' => 'required|date',
            'lien' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',

        ]);

        // Create a new event
        CoursEnLigne::create([
            'description' => $request->description,
            'duree' => $request->duree,
            'date' => $request->date,
            'lien' => $request->lien,
            'specialite' => $request->specialite,
            'user_id' => Auth::id(),         ]);

        // Redirect back with a success message
        return back()->with('success', 'Event created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(CoursEnLigne $coursEnLigne)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoursEnLigne $coursEnLigne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoursEnLigne $coursEnLigne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoursEnLigne $coursEnLigne)
    {
        //
    }
}
