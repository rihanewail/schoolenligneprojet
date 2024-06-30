<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RessourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return view('etudiant.rousource.index')  ;  }

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
        // $request->validate([
        //     'description'=>'required|max:255|string',
        //     'image'=>'nullable|mimes:png,jpg,jpeg,webp'

        //     ]);
        //     if($request->has('image')){
        //     $file=$request->file('image');
        //     $extenction=$file->getClientOriginalExtension();
        //     $filename=time().'.'.$extenction;
        //     $path='uploads/ad/';
        //     $file->move($path,$filename);

        //     }
        //     Ressource:: create([
        //         'description'=>$request->description,
        //     'image'=>$path.$filename,
        //     ]);
        //     return back()->with('success', 'Registration deleted successfully.');
        //         }

    //                                                         :pdf,doc,docx,ppt,pptx,xls,xlsx,mp4,mp3,jpg,png,gif|max:50000'



                {
                    $request->validate([
                        'nom' => 'required|string|max:255',
                        'description' => 'required|string|max:255',
                        'specialite' => 'required|string|max:255',
                        'nbrSingl' => 'required|integer',
                        'ressourc' => 'nullable|mimes:png,gif,jpg,docx,ppt,pptx,xls,xlsx,mp4,mp3,jpg,jpeg,webp,pdf,doc,docx|max:50000',
                    ]);

                    $filePath = null;

                    if ($request->hasFile('ressourc')) {
                        $file = $request->file('ressourc');
                        $extension = $file->getClientOriginalExtension();
                        $filename = time() . '.' . $extension;
                        $filePath = $file->storeAs('uploads/resources', $filename, 'public');
                    }

                    Ressource::create([
                        'nom' => $request->nom,
                        'description' => $request->description,
                        'specialite' => $request->specialite,
                        'nbrSingl' => $request->nbrSingl,
                        'ressourc' => $filePath,
                        'user_id' => Auth::id(), // Assuming the user is authenticated
                    ]);

                    return back()->with('success', 'Resource created successfully.');
                }
            }
    /**
     * Display the specified resource.
     */
    public function show(Ressource $ressource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ressource $ressource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ressource $ressource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $demande = Ressource::findOrFail($id);
        $demande->delete();

        // Redirect back with a success message
        return back();     }

        public function resource_search(Request $request)
        {
            $search_text = $request -> search;

            $filteredRessources = Ressource::where('nom', 'LIKE', "%$search_text%")
            // ->orWhere('users.name', 'LIKE', "%$search_text%")


          ->paginate(10);



        return view('posts', compact('filteredRessources'));

        // $query = $request->input('query');
        // $results = Lignetraget::where('name', 'LIKE', "%{$query}%")->get(); // Adjust the field to search

        // return response()->json($results);
    }
}
