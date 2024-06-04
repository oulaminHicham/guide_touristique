<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuideResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GuideeController extends Controller
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
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat"=> ['required' , 'string','image' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo"=> ['required' , 'string' ,'image'],
            "email"=> ['required' , 'email' ,'unique:users'],
            "password"=> ['required' ,'min:8'],
        ]);

        /*
            ## use this object to test
            {
                "name":"Mohammed" ,
                "prenom" :"alami" ,
                "username":"Mohammed_alami",
                "date_naissance":"2000-03-03" ,
                "sertificat":"certifie.png" ,
                "cine":"gg452367" ,
                "photo":"profile.png" ,
                "email":"alami@gmail.com",
                "password":"12345678"
            }
        */
        $request['isGuide'] = 1 ;
        $request['password']=bcrypt($request->password);
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
                /*
            ## use this object to test
            {
                "name":"Mohammed changed" ,
                "prenom" :"alami" ,
                "username":"Mohammed_alami changed",
                "date_naissance":"2000-05-03" ,
                "sertificat":"certie.png" ,
                "cine":"gg452677" ,
                "photo":"profe.png" ,
                "email":"alami@gmail.com",
                "password":"123456784774"
            }
        */
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

