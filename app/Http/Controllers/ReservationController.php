<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cirquit;
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
    return view('reservation.create', compact('users', 'circuits'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'date' => 'required|date',
        'distination' => 'required|string|max:255',
        'user_id' => 'required|exists:users,id',
        'cirquit_id' => 'required|exists:cirquits,id',
    ]);

    Reservation::create([
        'date' => $request->date,
        'distination' => $request->distination,
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
        return view('reservation.edit', compact('reserve', 'users', 'cirquits'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required|date',
            'distination' => 'required|string|max:255',
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
