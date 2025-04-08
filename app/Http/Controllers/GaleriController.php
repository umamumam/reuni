<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $tahunList = Galeri::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');
        $tahunFilter = $request->tahun;
        $galeris = Galeri::when($tahunFilter, function ($query, $tahunFilter) {
            return $query->where('tahun', $tahunFilter);
        })->orderBy('tahun', 'desc')->get();
        return view('galeri.index', compact('galeris', 'tahunList'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'tahun' => 'required|digits:4',
        ]);

        $fotoPath = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'foto' => $fotoPath,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri added successfully');
    }

    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'tahun' => 'required|digits:4',
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('galeri', 'public');
            $galeri->update(['foto' => $fotoPath]);
        }

        $galeri->update([
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri updated successfully');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri deleted successfully');
    }

    public function galeriByYear()
    {
        $galeris = Galeri::orderBy('tahun', 'desc')->get();
        return view('galeri.galeriTahun', compact('galeris'));
    }
    public function filter(Request $request)
    {
        $galeris = Galeri::when($request->tahun, fn($q) => $q->where('tahun', $request->tahun))
                        ->latest()
                        ->get();

        $html = '';
        foreach ($galeris as $index => $galeri) {
            $delay = '0.' . ($index + 1) . 's';
            $html .= '
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="' . $delay . '">
                    <div class="card bg-light rounded shadow-sm h-100">
                        <img src="' . asset('storage/' . $galeri->foto) . '" class="card-img-top" alt="Foto Keluarga">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">Tahun ' . $galeri->tahun . '</h5>
                        </div>
                    </div>
                </div>';
        }

        if ($galeris->isEmpty()) {
            $html = '
                <div class="col-12 text-center">
                    <p class="text-muted">Tidak ada foto untuk tahun tersebut.</p>
                </div>';
        }

        return response()->json(['html' => $html]);
    }
}
