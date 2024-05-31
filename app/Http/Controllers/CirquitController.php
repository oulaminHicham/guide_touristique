<?php

namespace App\Http\Controllers;
use App\Http\Resources\CirquitResource;
use App\Models\Cirquit;
use Illuminate\Http\Request;

class CirquitController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function index()
    {
        return CirquitResource::collection(Cirquit::all());
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "descreption"=> ['required' , 'string' , 'max:50'],
            "photo"=> ['required' , 'string' , 'image'],
            "prix"=> ['required' , 'float'],
            "guide_id"=> ['required' , 'exists:guides,id'],
            "distination_id"=> ['required' , 'exists:distinations,id'],
        ]);

        $data = Cirquit::create($request->all());
        return new CirquitResource($data);
    }
    /**
     * Update the resource in storage.
     */
    public function update(Request $request , string $id)
    {
        //
        $request->validate([
            "descreption"=> ['required' , 'string' , 'max:50'],
            "photo"=> ['required' , 'string' , 'image'],
            "prix"=> ['required' , 'float'],
            "guide_id"=> ['required' , 'exists:guides,id'],
            "distination_id"=> ['required' , 'exists:distinations,id'],
        ]);
        $cirquit = Cirquit::findOrFail($id);
        $cirquit -> update($request->all());
        return new CirquitResource($cirquit);
    }
    /**
     * Remove the resource from storage.
     */
    public function destroy(string $id)
    {
        $cirquit = Cirquit::findOrFail($id);
        $cirquit->delete();
        return 204 ;
    }
}
