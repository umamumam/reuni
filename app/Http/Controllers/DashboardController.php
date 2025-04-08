<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Keluarga;
use App\Models\Santunan;
use Illuminate\Http\Request;
use App\Models\StatusKeluarga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStatusKeluarga = StatusKeluarga::count();
        $totalKeluarga = Keluarga::count();
        $totalSantunan = Santunan::count();
        $totalUser = User::count();
        $users = User::all();
        $loginsToday = collect([Auth::user()]);
        return view('dashboard', compact('totalUser', 'totalKeluarga', 'totalStatusKeluarga', 'totalSantunan', 'users', 'loginsToday'));
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back()->with('success', 'User berhasil ditambahkan.');
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return back()->with('success', 'User berhasil diperbarui.');
    }

    public function destroyUser(User $user)
    {
        $user->delete();
        return back()->with('success', 'User berhasil dihapus.');
    }

}
