<?php
namespace App\Http\Controllers;

use App\Models\Cirquit;
use App\Models\Distination;
use App\Models\User;
use Illuminate\Http\Request;

class CircuitController extends Controller
{
    public function index()
    {
        $circuits = Cirquit::all();
        return view("circuits.index", compact("circuits"));
    }

    public function create()
    {
        $distinations = Distination::all();
        $guides = User::where('isGuide', '=', 1)->get();
        return view("circuits.create", compact('distinations', 'guides'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photos' => 'required|file', // Change to 'file' if expecting a file upload
            'descreption' => 'required|string', // Ensure this matches the form input name
            'prix' => 'required|numeric',
            'guide_id' => 'required|integer',
            'distination_id' => 'required|integer',
        ]);

        // Handle the file upload
        if ($request->hasFile('photos')) {
            $filePath = $request->file('photos')->store('photos', 'public');
            $request->merge(['photos' => $filePath]);
        }

        Cirquit::create($request->all());
        return redirect()->route('circuits.index');
    }

    public function edit(string $id)
    {
        $circuit = Cirquit::findOrFail($id);
        $distinations = Distination::all();
        $guides = User::where('isGuide', '=', 1)->get();
        return view('circuits.edit', compact('circuit', 'distinations', 'guides'));
    }

    public function update(Request $request, string $id)
    {
        $circuit = Cirquit::findOrFail($id);
        $request->validate([
            'photos' => 'required|string',
            'descreption' => 'required|string',
            'prix' => 'required|numeric',
            'guide_id' => 'required|integer',
            'distination_id' => 'required|integer',
        ]);

        $circuit->update($request->all());
        return redirect()->route('circuits.index');
    }

    public function destroy(string $id)
    {
        $circuit = Cirquit::findOrFail($id);

        // Assuming there is a reservations relationship
        $circuit->reservations()->delete();

        $circuit->delete();
        return redirect()->route('circuits.index');
    }
}
