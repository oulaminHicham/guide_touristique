<?php

namespace App\Http\Controllers;

use App\Models\Cirquit;
use App\Models\User;
use Illuminate\Http\Request;

class admineController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function index()
    {
        $cirquits = Cirquit::all()->take(3);
        $users=User::where('isGuide' , '=' , 1)->get();
        return view("welcome" , compact('cirquits' ,'users'));
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
