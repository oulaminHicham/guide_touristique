<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use App\Models\Cirquit;
use Illuminate\Http\Request;

class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function circuitsList(){
        $activeTab = 'circuitsList';
        return view('circuits.circuitsList',compact('activeTab'));
    }
    public function index()
    {
        $circuit = Circuit::all();
        return view("circuits.circuitsList", compact("circuit"));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
