<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ReservationResource::collection(Reservation::all());

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
        $resevation = Reservation::create($request->all());
        return new ReservationResource($resevation);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $reservation = Reservation::find($id);
            $reservation->delete();
            return 204 ;
        }
    }
}
