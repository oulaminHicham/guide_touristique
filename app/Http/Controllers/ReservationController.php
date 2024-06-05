<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cirquit;
use App\Models\Distination;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $reservations = Reservation::with(['user', 'cirquit'])->get();
    return view('reservation.index', compact('reservations'));
}
    public function create()
{
    $users = User::all();
    $circuits = Cirquit::all();
    $distinations = Distination::all();
    return view('reservation.create', compact('users', 'circuits' , 'distinations'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $request->validate([
                'date' => 'required|date',
                'distination_id' => 'required|string|max:255',
                'user_id' => 'required|exists:users,id',
                'cirquit_id' => 'required|exists:cirquits,id',
            ]);

            Reservation::create([
                'date' => $request->date,
                'distination_id' => $request->distination_id,
                'user_id' => $request->user_id,
                'cirquit_id' => $request->cirquit_id,
            ]);

            return redirect()->route('reservation.index')->with('success', 'Reservation created successfully.');
        }

    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        $reserve = Reservation::findOrFail($id);
        $users = User::all();
        $cirquits = Cirquit::all();
        $distinations = Distination::all();

        return view('reservation.edit', compact('reserve', 'users', 'cirquits' , 'distinations'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required|date',
            'distination_id' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'cirquit_id' => 'required|integer|exists:cirquits,id',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->route('reservation.index')->with('success', 'Reservation updated successfully.');
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
