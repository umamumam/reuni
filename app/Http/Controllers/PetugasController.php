<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\HalalBilHalal;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $halalBilHalals = HalalBilHalal::all();
        $petugas = Petugas::with('halalBilHalal')->get();
        return view('petugas.index', compact('petugas', 'halalBilHalals'));
    }

    public function create()
    {
        $halalBilHalals = HalalBilHalal::all();
        return view('petugas.create', compact('halalBilHalals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'halal_bihalal_id' => 'required|exists:halal_bil_halals,id',
            'mc' => 'nullable|string',
            'qori' => 'nullable|string',
            'tahlil' => 'nullable|string',
            'sambutan_panitia' => 'nullable|string',
            'sambutan_tuan_rumah' => 'nullable|string',
            'sambutan_bendahara' => 'nullable|string',
            'mauidhoh' => 'nullable|string',
        ]);

        Petugas::create($request->all());

        return redirect()->route('petugas.index')->with('success', 'Petugas added successfully');
    }

    public function edit(Petugas $petugas)
    {
        $halalBilHalals = HalalBilHalal::all();
        return view('petugas.edit', compact('petugas', 'halalBilHalals'));
    }

    public function update(Request $request, Petugas $petugas)
    {
        $request->validate([
            'halal_bihalal_id' => 'required|exists:halal_bil_halals,id',
            'mc' => 'nullable|string',
            'qori' => 'nullable|string',
            'tahlil' => 'nullable|string',
            'sambutan_panitia' => 'nullable|string',
            'sambutan_tuan_rumah' => 'nullable|string',
            'sambutan_bendahara' => 'nullable|string',
            'mauidhoh' => 'nullable|string',
        ]);

        $petugas->update($request->all());

        return redirect()->route('petugas.index')->with('success', 'Petugas updated successfully');
    }

    public function destroy(Petugas $petugas)
    {
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Petugas deleted successfully');
    }
}
