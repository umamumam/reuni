<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama', 'foto', 'tanggal_lahir', 'alamat', 
        'status_keluarga_id', 'anak_ke', 'keluarga_id', 
        'status', 'tanggal_meninggal', 'pasangan_id' // DITAMBAHKAN pasangan_id
    ];

    // Relasi ke status keluarga (anak, cucu, cicit, suami, istri, dll.)
    public function statusKeluarga()
    {
        return $this->belongsTo(StatusKeluarga::class);
    }

    // Relasi ke Orang Tua
    public function orangTua()
    {
        return $this->belongsTo(Keluarga::class, 'keluarga_id');
    }

    // Relasi ke Anak-anak (rekursif)
    public function anak()
    {
        return $this->hasMany(Keluarga::class, 'keluarga_id');
    }

    // Relasi ke Pasangan
    public function pasangan()
    {
        return $this->belongsTo(Keluarga::class, 'pasangan_id');
    }
    
    public function pasanganDari()
    {
        return $this->hasOne(Keluarga::class, 'pasangan_id');
    }

    // Relasi ke Saudara Kandung (Anak dari orang tua yang sama)
    public function saudara()
    {
        return $this->hasMany(Keluarga::class, 'keluarga_id')
            ->where('id', '!=', $this->id); // Kecuali dirinya sendiri
    }

    // Mengambil semua pasangan (jika A punya pasangan B, maka B juga punya A)
    public function semuaPasangan()
    {
        return Keluarga::where('pasangan_id', $this->id)
            ->orWhere('id', $this->pasangan_id)
            ->get();
    }
}
