<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\SantunanController;
use App\Http\Controllers\HalalBilHalalController;
use App\Http\Controllers\StatusKeluargaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('status_keluarga', StatusKeluargaController::class);
Route::resource('keluarga', KeluargaController::class);
Route::resource('halal_bil_halal', HalalBilHalalController::class);
Route::get('petugas/{petugas}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('petugas/{petugas}', [PetugasController::class, 'update'])->name('petugas.update');
Route::resource('petugas', PetugasController::class);
Route::resource('santunan', SantunanController::class);
Route::resource('galeri', GaleriController::class);
Route::get('galeritahun', [GaleriController::class, 'galeriByYear'])->name('galeri.byYear');
// Route::get('silsilah', [KeluargaController::class, 'silsilah'])->name('silsilah');
Route::get('/silsilah', [KeluargaController::class, 'silsilah'])->name('keluarga.silsilah');
Route::get('halal_bil_halal/cetak/{id}', [HalalBilHalalController::class, 'cetak'])->name('halal_bil_halal.cetak');


require __DIR__.'/auth.php';
