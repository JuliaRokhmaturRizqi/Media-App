<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id';

    //id prodi juga harus dimasukkan agar bisa di isi
    protected $fillable = ['nim', 'nama_lengkap', 'prodi_id'];
}
