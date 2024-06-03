<?php

namespace App\Http\Controllers;

use App\Models\Cirquit;
use Illuminate\Http\Request;

class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $circuits = Cirquit::all();

        return view("circuits.index", compact("circuits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("circuits.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photos' => 'required|string',
            'descreption' => 'required|string',
            'prix' => 'required|numeric',
            'guide_id' => 'required|integer',
            'distination_id' => 'required|integer',
        ]);

        Cirquit::create($request->all());
        return redirect()->route('circuits.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $circuit = Cirquit::findOrFail($id);
        return view('circuits.edit', compact('circuit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $circuit = Cirquit::findOrFail($id);
        $request->validate([
            'photos' => 'required|string',
            'descreption' => 'required|string',
            'prix' => 'required|numeric',
            'guide_id' => 'required|integer',
            'distination_id' => 'required|integer',
        ]);

        $circuit->update($request->all());
        return redirect()->route('circuits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $circuit = Cirquit::findOrFail($id);
        $circuit->delete();
        return redirect()->route('circuits.index');
    }
}
