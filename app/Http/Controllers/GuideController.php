<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Resources\GuideResource;
use App\Models\Guide;
use App\Models\User;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function guidesList(){
        $activeTab = 'guidesList';
        return view('guides.guidesList',compact('activeTab'));
    }
    public function index()
    {
        $users = User::whereNotNull('guide_id')->get();
        // $guid=Guide::all();
        // return GuideResource::collection($guide);
        return view("guides.guidesList", compact("users"));

    }
    // guide accepter
    // public function acceptGuide($id)
    // {
    //     $guide = Guide::find($id);
    //     $guide->accepter = 1;
    //     $guide->save();
    //     return redirect()->route('guides.index');
    //  }



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
        $request->validate([
            "date_naissance"=> ['required' , 'string','date' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "sertificat"=> ['required' , 'string','image' ],
            "accepter"=> ['required' , 'integer' ],
        ]);

        $guide = Guide::findOrFail($id);
        $guide->update($request->all());
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
