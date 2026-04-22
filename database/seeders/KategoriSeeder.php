<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data_kategori = [
            ['nama_kategori' => 'Jurnal Ilmiah'],
            ['nama_kategori' => 'Skripsi / Tugas Akhir'],
            ['nama_kategori' => 'Aplikasi Mobile'],
        ];

        foreach ($data_kategori as $kategori) {
            $simpan = Kategori::create([
                'nama_kategori' => $kategori['nama_kategori']
            ]);
        }
    }
}