<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index()
    {
        $client =User::where("isGuide" , "=" ,0)->get();
        return ClientResource::collection($client);
    }

    /**
     * Store the newly created resource in storage.
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
        $request['password']=crypt($request->password);
        $data = User :: create($request->all());
        return new ClientResource($data);
    }




    /**
     * Update the resource in storage.
     */
    public function update(Request $request , string $id)
    {
        //
        $client = User::find($id);
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
        $client->update($request->all());
        return new ClientResource($client);
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(string $id)
    {
        $client = User::findOrFail($id);
        $client->delete();
        return 204 ;
    }
}
