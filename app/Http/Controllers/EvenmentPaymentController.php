<?php

namespace App\Http\Controllers;

use App\Models\EvenmentPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenmentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('expert.demendeEvent') ;
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


        $request->validate([
            'description' => 'required|string|max:255',
            'durre' => 'required|string|max:255',
            'date' => 'required|date',
            'lien' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'nmbrDePlace' => 'required|integer',
        ]);

        // Create a new event
        EvenmentPayment::create([
            'description' => $request->description,
            'durre' => $request->durre,
            'date' => $request->date,
            'lien' => $request->lien,
            'specialite' => $request->specialite,
            'prix' => $request->prix,
            'nmbrDePlace' => $request->nmbrDePlace,
            'user_id' => Auth::id(),         ]);

        // Redirect back with a success message
        return back()->with('success', 'Event created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(EvenmentPayment $evenmentPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvenmentPayment $evenmentPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvenmentPayment $evenmentPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvenmentPayment $evenmentPayment)
    {
        //
    }
}
