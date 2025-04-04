<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HalalBilHalal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'tempat',
        'halal_bihalal_ke',
        'mc',
        'qori',
        'tahlil',
        'sambutan_panitia',
        'sambutan_tuan_rumah',
        'sambutan_bendahara',
        'mauidhoh',
    ];
}
