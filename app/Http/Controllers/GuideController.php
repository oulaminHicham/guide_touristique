<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuideResource;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guide=Guide::all();
        return GuideResource::collection($guide);

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
            "date_naissance"=> ['required' , 'string','date' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "sertificat"=> ['required' , 'string','image' ],
            "accepter"=> ['required' , 'integer' ],
        ]);
        $data =  Guide::create($request->all());
        return new GuideResource($data);
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
        $request->validate([
            "date_naissance"=> ['required' , 'string','date' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "sertificat"=> ['required' , 'string','image' ],
            "accepter"=> ['required' , 'integer' ],
        ]);

        $guide = Guide::findOrFail($id);
        $guide->update($request->all());
        return new GuideResource($guide);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guide = Guide::findOrFail($id);
        $guide->delete();
        return 204 ;
    }
    }

