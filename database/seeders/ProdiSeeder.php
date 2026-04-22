<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Prodi::create([
        'nama_prodi' => 'Informatika',
        'singkatan' => 'IF'
    ]);
    \App\Models\Prodi::create([
        'nama_prodi' => 'Sistem Informasi',
        'singkatan' => 'SI'
    ]);
}

}
