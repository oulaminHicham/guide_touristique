<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuideResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        // $request->validate([
        //     "name"=> ['required' , 'string' ],
        //     "prenom"=> ['required' , 'string' ],
        //     "username"=> ['required' , 'string' ],
        //     "date_naissance"=> ['required' ,'date' ],
        //     "sertificat"=> ['required' , 'string','image' ],
        //     "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
        //     "photo"=> ['required' , 'string' ,'image'],
        //     "email"=> ['required' , 'email' ,'unique:users'],
        //     "password"=> ['required' , 'password' ,'min:8'],
        // ]);
        $request['isGuide'] = 1 ;
        $data =  User::create($request->all());
        return new GuideResource($data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guide = User::findOrFail($id);
        $request->validate([
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat"=> ['required' , 'string','image' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo"=> ['required' , 'string' ,'image'],
            "email"=> ['required' , 'email' ,Rule::unique('users')->ignore($guide->id)],
            "password"=> ['required' , 'password' ,'min:8'],
        ]);
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

