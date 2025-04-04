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
            ['nama' => 'Anak'],
            ['nama' => 'Cucu'],
            ['nama' => 'Cicit'],
        ]);
    }
}
