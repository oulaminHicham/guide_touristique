<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReservationResource;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserve = Reservation::all();
        return view('reservation.index', compact('reserve'));
    }
    public function create()
    {
        return view('reservation.create');
    }
    public function edit(string $id)
    {
        $reserve = Reservation::findOrFail($id);
        return view('reservation.edit', compact('reserve'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "date"=> ['required','date'],
            "distination"=> ['required','string' , 'max:40'],
            "user_id"=> ['required','integer','exists:users,id'],
            "cirquit_id"=> ['required','integer','exists:cirquits,id'],
        ]);
        Reservation::create($request->all());
        return redirect()->route('reservation.index');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "date"=> ['required','date'],
            "distination"=> ['required','string' , 'max:40'],
            "user_id"=> ['required','integer','exists:users,id'],
            "cirquit_id"=> ['required','integer','exists:cirquits,id'],
        ]);
        $reservation = Reservation::find($id);
        $reservation->update($request->all());
        return redirect()->route('reservation.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservation.index');
    }
}
