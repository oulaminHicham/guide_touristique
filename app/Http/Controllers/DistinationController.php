<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistinationResource;
use App\Models\Distination;
use Illuminate\Http\Request;

class DistinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function distinationData()
    {
        return DistinationResource::collection(Distination::all());
    }

    public function index()
    {
        $distinations = Distination::all();
        return view("destinations.index", compact("distinations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){
        return view("destinations.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            "nom" => ['required', 'string', 'max:50'],
            "photo" => ['required', 'string'],
        ]);
        $distination = new Distination();
        $distination->nom = $request->nom;
        $distination->photo = $request->photo;
        $distination->save();

        $distination->save();
        return redirect()->route('destinations.index')->with('success', 'La réunion a été créée avec succès.');
    }
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         "nom"=> ['required' , 'string' , 'max:50'],
    //         "photo"=> ['required' , 'string' , 'image'],
    //     ]);
    //     $distination = Distination::findOrFail($id);
    //     $distination->update($request->all());
    //     return new DistinationResource($distination);
    // }
    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     $distination = Distination::findOrFail($id);
    //     $distination->delete();
    //     return 204 ;
    // }


    public function edit($id)
    {
        $destination = Distination::findOrFail($id);
        return view('destinations.edite', compact('destination'));
    }

    public function update(Request $request, $id)
    {
        $destination = Distination::findOrFail($id);
        $destination->update($request->all());
        return redirect()->route('destinations.index')->with('success', 'Destination mise à jour avec succès');
    }

    public function destroy($id)
    {
        $destination = Distination::findOrFail($id);
        $destination->delete();
        return redirect()->route('destinations.index')->with('success', 'Destination supprimée avec succès');
    }
}
