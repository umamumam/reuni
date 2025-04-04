<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
}
