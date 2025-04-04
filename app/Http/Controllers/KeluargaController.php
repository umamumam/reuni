<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;
use App\Models\StatusKeluarga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KeluargaController extends Controller
{
    public function index(Request $request)
    {
        $query = Keluarga::query();
        if ($request->has('search') && $request->search != '') {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }
        $keluargas = $query->paginate(10)->withQueryString();
        return view('keluarga.index', compact('keluargas'));
    }

    public function create()
    {
        $statuses = StatusKeluarga::all(); // Untuk dropdown Status Keluarga
        $keluargas = Keluarga::all(); // Untuk dropdown Orang Tua dan Pasangan
        return view('keluarga.create', compact('statuses', 'keluargas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,webp,png|max:2048',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'status_keluarga_id' => 'required|exists:status_keluargas,id',
            'anak_ke' => 'required|integer',
            'keluarga_id' => 'nullable|exists:keluargas,id',
            'pasangan_id' => 'nullable|exists:keluargas,id|different:keluarga_id',
            'status' => 'required|in:hidup,meninggal',
            'tanggal_meninggal' => 'nullable|date',
        ]);

        $imagePath = null;
        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('keluarga', 'public');
        }

        Keluarga::create([
            'nama' => $request->nama,
            'foto' => $imagePath,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'status_keluarga_id' => $request->status_keluarga_id,
            'anak_ke' => $request->anak_ke,
            'keluarga_id' => $request->keluarga_id,
            'pasangan_id' => $request->pasangan_id,
            'status' => $request->status,
            'tanggal_meninggal' => $request->tanggal_meninggal,
        ]);

        // return redirect()->route('keluarga.index')->with('success', 'Keluarga berhasil ditambahkan');
        if (Auth::check()) {
            return redirect()->route('keluarga.index')->with('success', 'Keluarga berhasil ditambahkan');
        } else {
            return redirect('/silsilah')->with('warning', 'Silakan login untuk mengakses fitur ini.');
        }
    }

    public function edit(Keluarga $keluarga)
    {
        $statuses = StatusKeluarga::all(); // Untuk dropdown Status Keluarga
        $keluargas = Keluarga::all(); // Untuk dropdown Orang Tua dan Pasangan
        return view('keluarga.edit', compact('keluarga', 'statuses', 'keluargas'));
    }

    public function update(Request $request, Keluarga $keluarga)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi foto
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'status_keluarga_id' => 'required|exists:status_keluargas,id',
            'anak_ke' => 'required|integer',
            'keluarga_id' => 'nullable|exists:keluargas,id', // Validasi keluarga (orang tua)
            'pasangan_id' => 'nullable|exists:keluargas,id|different:keluarga_id',
            'status' => 'required|in:hidup,meninggal',
            'tanggal_meninggal' => 'nullable|date',
        ]);

        // Jika ada foto baru, hapus foto lama dan simpan foto baru
        if ($request->hasFile('foto')) {
            if ($keluarga->foto) {
                Storage::disk('public')->delete($keluarga->foto); // Menghapus foto lama
            }
            $fotoPath = $request->file('foto')->store('keluarga', 'public');
            $keluarga->foto = $fotoPath;
        }

        // Update data keluarga
        $keluarga->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'status_keluarga_id' => $request->status_keluarga_id,
            'anak_ke' => $request->anak_ke,
            'keluarga_id' => $request->keluarga_id,
            'pasangan_id' => $request->pasangan_id,
            'status' => $request->status,
            'tanggal_meninggal' => $request->tanggal_meninggal,
        ]);

        // return redirect()->route('keluarga.index')->with('success', 'Keluarga berhasil diperbarui.');
        if (Auth::check()) {
            return redirect()->route('keluarga.index')->with('success', 'Keluarga berhasil ditambahkan');
        } else {
            return redirect('/silsilah')->with('warning', 'Silakan login untuk mengakses fitur ini.');
        }
    }

    public function destroy(Keluarga $keluarga)
    {
        // Hapus foto jika ada
        if ($keluarga->foto) {
            Storage::disk('public')->delete($keluarga->foto);
        }

        $keluarga->delete();

        return redirect()->route('keluarga.index')->with('success', 'Keluarga berhasil dihapus.');
    }

    public function silsilah()
    {
        $indukKeluarga = Keluarga::with(['statusKeluarga', 'anak', 'pasangan', 'pasanganDari'])
            ->whereNull('keluarga_id') // Ambil hanya root keluarga (tidak punya orang tua)
            ->get();
        return view('keluarga.silsilah', compact('indukKeluarga'));
    }
}
