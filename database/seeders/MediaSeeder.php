<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        $data_media = [
            [
                'mahasiswa_id' => 1, // Milik Mahasiswa ID 1
                'kategori_id' => 3, // Kategori Aplikasi Mobile
                'judul' => 'Aplikasi CampusNoteX',
                'deskripsi' => 'Aplikasi produktivitas all-in-one terintegrasi untuk mahasiswa berbasis mobile.',
                'judul_penelitian' => 'Rancang Bangun Aplikasi CampusNoteX sebagai Solusi Produktivitas Akademik Terintegrasi Berbasis Mobile',
                'tahun_terbit' => '2026',
                'link_media' => 'https://github.com/mahasiswa/campusnotex',
                'gambar_cover' => 'campusnotex_cover.png'
            ]
        ];

        foreach ($data_media as $media) {
            $simpan = Media::create([
                'mahasiswa_id' => $media['mahasiswa_id'],
                'kategori_id' => $media['kategori_id'],
                'judul' => $media['judul'],
                'deskripsi' => $media['deskripsi'],
                'judul_penelitian' => $media['judul_penelitian'],
                'tahun_terbit' => $media['tahun_terbit'],
                'link_media' => $media['link_media'],
                'gambar_cover' => $media['gambar_cover'],
            ]);
        }
    }
}