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
        $users = User::where('isGuide' , '=' , 1)->get();
        return view("guides.guidesList", compact("users"));

    }
    // guide accepter
    public function acceptGuide($id)
    {
        $users = User::find($id);
        $users->accepter = 1;
        $users->save();
        return redirect()->route('guides.index');
     }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guides.create');
    }




     /* Store a newly created resource in storage.
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
        $request['isGuide'] = 1 ;
        $request['password']=bcrypt($request->password);
        $data =  User::create($request->all());
        return redirect()->route('guides.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('guides.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat"=> ['required' , 'string','image' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo"=> ['required' , 'string' ,'image'],
            "email"=> ['required' , 'email' ,Rule::unique('users')->ignore($user->id)],
            "password"=> ['required' , 'password' ,'min:8'],
        ]);
        $user->update($request->all());
        return redirect()->route('guides.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guide = User::findOrFail($id);
        $guide->delete();
        return redirect()->route('guides.index');
    }
}
