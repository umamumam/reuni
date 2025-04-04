<?php

namespace App\Http\Controllers;

use App\Models\StatusKeluarga;
use Illuminate\Http\Request;

class StatusKeluargaController extends Controller
{
    public function index()
    {
        $statuses = StatusKeluarga::all();
        return view('status_keluarga.index', compact('statuses'));
    }

    public function create()
    {
        return view('status_keluarga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);
        
        StatusKeluarga::create($request->all());
        return redirect()->route('status_keluarga.index')->with('success', 'Status keluarga berhasil ditambahkan');
    }

    public function show(StatusKeluarga $statusKeluarga)
    {
        return view('status_keluarga.show', compact('statusKeluarga'));
    }

    public function edit(StatusKeluarga $statusKeluarga)
    {
        return view('status_keluarga.edit', compact('statusKeluarga'));
    }

    public function update(Request $request, StatusKeluarga $statusKeluarga)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);
        
        $statusKeluarga->update($request->all());
        return redirect()->route('status_keluarga.index')->with('success', 'Status keluarga berhasil diperbarui');
    }

    public function destroy(StatusKeluarga $statusKeluarga)
    {
        $statusKeluarga->delete();
        return redirect()->route('status_keluarga.index')->with('success', 'Status keluarga berhasil dihapus');
    }
}

