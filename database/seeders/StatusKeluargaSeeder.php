<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusKeluargaSeeder extends Seeder
{
    public function run()
    {
        DB::table('status_keluargas')->insert([
            ['nama' => '-'],
            ['nama' => 'Pasangan'],
            ['nama' => 'Anak'],
            ['nama' => 'Cucu'],
            ['nama' => 'Cicit'],
            ['nama' => 'Piut'],
            ['nama' => 'Bayut'],
            ['nama' => 'Canggah'],
            ['nama' => 'Wareng'],
            ['nama' => 'Udeg-udeg'],
            ['nama' => 'Gantung siwur'],
        ]);
    }
}
