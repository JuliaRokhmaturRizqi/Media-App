<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data_mahasiswa = [
            [
                'nim' => '2355202058',
                'nama_lengkap' => 'Julia Rokhmatur Rizqi',
                'prodi_id' => 1 // 1 ini mengarah ke Informatika
            ],
            [
                'nim' => '2355202074',
                'nama_lengkap' => 'Ahmad Fauzan',
                'prodi_id' => 1 
            ],
        ];

        foreach ($data_mahasiswa as $mahasiswa) {
            $simpan = Mahasiswa::create([
                'nim' => $mahasiswa['nim'],
                'nama_lengkap' => $mahasiswa['nama_lengkap'],
                'prodi_id' => $mahasiswa['prodi_id'],
            ]);
        }
    }
}