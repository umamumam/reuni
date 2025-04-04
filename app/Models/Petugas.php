<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petugas extends Model
{
    use HasFactory;
    protected $fillable = ['halal_bihalal_id', 'mc', 'qori', 'tahlil', 'sambutan_panitia', 'sambutan_tuan_rumah', 'sambutan_bendahara', 'mauidhoh'];
    
    public function halalBilHalal()
    {
        return $this->belongsTo(HalalBilHalal::class);
    }
}
