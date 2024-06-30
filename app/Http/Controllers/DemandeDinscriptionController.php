<?php

namespace App\Http\Controllers;

use App\Models\DemandeDinscription;
use App\Models\enseignant;
use App\Models\Expert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DemandeDinscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('expert.inscrir_expert');
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
        DemandeDinscription::create(

            $request->all()
         );  return redirect()->route('demandinscreption.index');    }

    /**
     * Display the specified resource.
     */
    public function show(DemandeDinscription $demandeDinscription)
    {
        //
    }
    public function admit($id)
    {
        $demand = DemandeDinscription::findOrFail($id);

        // Insert into specific table based on specialite
        if ($demand->specialite == 'enseignant') {
            enseignant::create([
                'nom' => $demand->nom,
                'prenom' => $demand->prenom,
                'tel' => $demand->tel,
                'grade' => $demand->specialite,
                'specialite' => $demand->specialite,
            ]);
        } else {
            Expert::create([
                'nom' => $demand->nom,
                'prenom' => $demand->prenom,
                'tel' => $demand->tel,
                'grade' => $demand->specialite,
                'specialite' => $demand->specialite,
            ]);
        }

        // Create a new user
        User::create([
            'name' => $demand->nom . ' ' . $demand->prenom,
            'email' => $demand->email,
            'password' => Hash::make($demand->nom),
            'usertype'=>'3',
             // set a default password or generate a random one
        ]);

        // Delete the demand after processing
        $demand->delete();

        return redirect()->route('demandinscreption.index')->with('success', 'Demand admitted successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DemandeDinscription $demandeDinscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DemandeDinscription $demandeDinscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $demande = DemandeDinscription::findOrFail($id);
        $demande->delete();

        // Redirect back with a success message
        return redirect()->route('demandes.index')->with('success', 'Demande d\'inscription deleted successfully.');    }
}
