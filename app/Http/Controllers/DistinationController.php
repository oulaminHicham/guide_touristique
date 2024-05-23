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
    public function index()
    {
        return DistinationResource::collection(Distination::all());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=> ['required' , 'string' , 'max:50'],
            "photo"=> ['required' , 'string' , 'image'],
        ]);
        $data =  Distination::create($request->all());
        return new DistinationResource($data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nom"=> ['required' , 'string' , 'max:50'],
            "photo"=> ['required' , 'string' , 'image'],
        ]);
        $distination = Distination::findOrFail($id);
        $distination->update($request->all());
        return new DistinationResource($distination);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $distination = Distination::findOrFail($id);
        $distination->delete();
        return 204 ;
    }
}
