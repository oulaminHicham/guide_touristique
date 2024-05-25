<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuideResource;
use App\Models\User;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guide=User::where('isGuide' , '=' , 1)->get();
        
        return GuideResource::collection($guide);
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
        $data =  User::create($request->all());
        return new GuideResource($data);
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

        $guide = User::findOrFail($id);
        $guide->update($request->all());
        return new GuideResource($guide);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guide = User::findOrFail($id);
        $guide->delete();
        return 204 ;
    }
    }

