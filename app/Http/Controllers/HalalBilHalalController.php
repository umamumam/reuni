<?php

namespace App\Http\Controllers;

use App\Models\HalalBilHalal;
use Illuminate\Http\Request;

class HalalBilHalalController extends Controller
{
    public function index()
    {
        $halalBilHalals = HalalBilHalal::all();
        return view('halal_bil_halal.index', compact('halalBilHalals'));
    }

    public function create()
    {
        return view('halal_bil_halal.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal' => 'required|date',
            'tempat' => 'required|string',
            'halal_bihalal_ke' => 'required|integer',
            'mc' => 'nullable|string',
            'qori' => 'nullable|string',
            'tahlil' => 'nullable|string',
            'sambutan_panitia' => 'nullable|string',
            'sambutan_tuan_rumah' => 'nullable|string',
            'sambutan_bendahara' => 'nullable|string',
            'mauidhoh' => 'nullable|string',
        ]);

        // Simpan data halal bihalal
        HalalBilHalal::create($request->all());

        return redirect()->route('halal_bil_halal.index')->with('success', 'Halal Bil Halal added successfully');
    }

    // Menampilkan form untuk mengedit data halal bihalal
    public function edit(HalalBilHalal $halalBilHalal)
    {
        return view('halal_bil_halal.edit', compact('halalBilHalal'));
    }

    // Mengupdate data halal bihalal yang ada
    public function update(Request $request, HalalBilHalal $halalBilHalal)
    {
        // Validasi input
        $request->validate([
            'tanggal' => 'required|date',
            'tempat' => 'required|string',
            'halal_bihalal_ke' => 'required|integer',
            'mc' => 'nullable|string',
            'qori' => 'nullable|string',
            'tahlil' => 'nullable|string',
            'sambutan_panitia' => 'nullable|string',
            'sambutan_tuan_rumah' => 'nullable|string',
            'sambutan_bendahara' => 'nullable|string',
            'mauidhoh' => 'nullable|string',
        ]);

        // Update data halal bihalal
        $halalBilHalal->update($request->all());

        return redirect()->route('halal_bil_halal.index')->with('success', 'Halal Bil Halal updated successfully');
    }

    // Menghapus data halal bihalal
    public function destroy(HalalBilHalal $halalBilHalal)
    {
        // Hapus data halal bihalal
        $halalBilHalal->delete();

        return redirect()->route('halal_bil_halal.index')->with('success', 'Halal Bil Halal deleted successfully');
    }
}

