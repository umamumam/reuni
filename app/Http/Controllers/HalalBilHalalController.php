<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HalalBilHalal;
use Barryvdh\DomPDF\Facade\Pdf;
use Alkoumi\LaravelHijriDate\Hijri; // Tambahkan ini

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

        // Konversi tanggal Masehi ke Hijriah
        $tanggalHijriah = Hijri::Date('j F Y', $request->tanggal);

        // Simpan data halal bihalal
        HalalBilHalal::create([
            'tanggal' => $request->tanggal,
            'tanggal_hijriah' => $tanggalHijriah, // Simpan tanggal Hijriah
            'halal_bihalal_ke' => $request->halal_bihalal_ke,
            'tempat' => $request->tempat,
            'mc' => $request->mc,
            'qori' => $request->qori,
            'tahlil' => $request->tahlil,
            'sambutan_panitia' => $request->sambutan_panitia,
            'sambutan_tuan_rumah' => $request->sambutan_tuan_rumah,
            'sambutan_bendahara' => $request->sambutan_bendahara,
            'mauidhoh' => $request->mauidhoh,
        ]);

        return redirect()->route('halal_bil_halal.index')->with('success', 'Halal Bil Halal added successfully');
    }

    public function edit(HalalBilHalal $halalBilHalal)
    {
        return view('halal_bil_halal.edit', compact('halalBilHalal'));
    }

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

        // Konversi tanggal Masehi ke Hijriah
        $tanggalHijriah = Hijri::Date('j F Y', $request->tanggal);

        // Update data halal bihalal
        $halalBilHalal->update([
            'tanggal' => $request->tanggal,
            'tanggal_hijriah' => $tanggalHijriah, // Update tanggal Hijriah
            'halal_bihalal_ke' => $request->halal_bihalal_ke,
            'tempat' => $request->tempat,
            'mc' => $request->mc,
            'qori' => $request->qori,
            'tahlil' => $request->tahlil,
            'sambutan_panitia' => $request->sambutan_panitia,
            'sambutan_tuan_rumah' => $request->sambutan_tuan_rumah,
            'sambutan_bendahara' => $request->sambutan_bendahara,
            'mauidhoh' => $request->mauidhoh,
        ]);

        return redirect()->route('halal_bil_halal.index')->with('success', 'Halal Bil Halal updated successfully');
    }

    public function destroy(HalalBilHalal $halalBilHalal)
    {
        $halalBilHalal->delete();
        return redirect()->route('halal_bil_halal.index')->with('success', 'Halal Bil Halal deleted successfully');
    }

    public function cetak($id)
    {
        $halalBilHalal = HalalBilHalal::findOrFail($id);
        $pdf = Pdf::loadView('halal_bil_halal.surat_pdf', compact('halalBilHalal'));

        return $pdf->stream('Surat_Halal_Bil_Halal.pdf');
    }
}
