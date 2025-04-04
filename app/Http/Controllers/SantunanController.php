<?php

namespace App\Http\Controllers;

use App\Models\Santunan;
use Illuminate\Http\Request;

class SantunanController extends Controller
{
    public function index()
    {
        $santunans = Santunan::all();
        return view('santunan.index', compact('santunans'));
    }

    public function create()
    {
        return view('santunan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'status' => 'required|in:dhuafa,yatim',
            'tahun' => 'required|digits:4',
        ]);

        Santunan::create($request->all());

        return redirect()->route('santunan.index')->with('success', 'Santunan added successfully');
    }

    public function edit(Santunan $santunan)
    {
        return view('santunan.edit', compact('santunan'));
    }

    public function update(Request $request, Santunan $santunan)
    {
        $request->validate([
            'nama' => 'required|string',
            'status' => 'required|in:dhuafa,yatim',
            'tahun' => 'required|digits:4',
        ]);

        $santunan->update($request->all());

        return redirect()->route('santunan.index')->with('success', 'Santunan updated successfully');
    }

    public function destroy(Santunan $santunan)
    {
        $santunan->delete();

        return redirect()->route('santunan.index')->with('success', 'Santunan deleted successfully');
    }
}
