<?php

namespace App\Http\Controllers;

use App\Models\demandepub;
use Illuminate\Http\Request;

class DemandepubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visiteur.pub.index')    ;}
    

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

             // Validate the form data
             $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'tel' => 'required|string|max:15',
                'email' => 'required|string|email|max:255',
                'speciality' => 'required|string|max:255',
                'redaction' => 'required|string|max:255',
                // 'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048', // Max size 2MB
            ]);
    
            // // Initialize image path variable
            // if($request->has('image')){
            //     $file=$request->file('image');
            //     $extenction=$file->getClientOriginalExtension();
            //     $filename=time().'.'.$extenction;
            //     $path='uploads/ad/';
            //     $file->move($path,$filename);
            // }
    
            // Create a new demande pub record
            Demandepub::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'tel' => $request->tel,
                'email' => $request->email,
                'description' => $request->description,
    
                'speciality' => $request->speciality,
                'redaction' => $request->redaction,
                // 'image'=>$path.$filename,
            ]);
    
            // Redirect or show a success message
            return redirect()->back()->with('success', 'Registration deleted successfully.');    }
    
        

    /**
     * Display the specified resource.
     */
    public function show(demandepub $demandepub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(demandepub $demandepub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, demandepub $demandepub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(demandepub $demandepub)
    {
        //
    }
}
