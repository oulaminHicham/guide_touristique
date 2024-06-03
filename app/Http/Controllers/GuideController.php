<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function acceptGuide($id)
{
    $guide = User::findOrFail($id);
    $guide->accepter = 1;
    $guide->save();

    return redirect()->route('guides.index')->with('success', 'Guide has been accepted successfully.');
}
    public function index()
    {
        $users=User::where('isGuide' , '=' , 1)->get();

        return view("guides.index", compact("users"));
    }
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('guides.edit', compact('user'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat" => ['required', 'string'],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo" => ['required', 'string'],
            "email"=> ['required' , 'email' ,'unique:users'],
            "password"=> ['required' ,'min:8'],
        ]);
        $request['isGuide'] = 1 ;
        $request['password']=bcrypt($request->password);
        User::create($request->all());
        return redirect()->route('guides.index')->with('success', 'Guide has been created successfully.');
    }
    public function create()
    {
        return view("guides.create");
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            "name"=> ['required', 'string'],
            "prenom"=> ['required', 'string'],
            "username"=> ['required', 'string'],
            "date_naissance"=> ['required', 'date'],
            "sertificat"=> ['nullable', 'string'],
            "cine"=> ['required', 'string', 'max:8', 'min:8'],
            "photo"=> ['nullable', 'string'],
            "email"=> ['required', 'email', Rule::unique('users')->ignore($user->id)],
            "password"=> ['nullable', 'min:8'],
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
        return redirect()->route('guides.index')->with('success', 'La réunion a été créée avec succès.');
    }
    }
