<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori; // Memanggil Asisten Gudang Kategori
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    // 1. TUGAS MENAMPILKAN DATA (GET)
    public function index()
    {
        //
        $Kategori = Kategori::all();
        return response()->json($Kategori);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //menambahkan data
    {
        //validasi form
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);

        //cek jika ada error validasi for
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        //menyimpan data ke database
        $Kategori = new Kategori();
        $Kategori->fill($request->all());
        $simpan = $Kategori->save();
        
        if ($simpan) {
            return response()->json([
                'status' => 'success',
            ], 201);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'gagal menyimpan data'
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        //cek jika ada error validasi for
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'error' => $validator->errors()
            ], 422);
        }

        //cari data berdasarkan id
        $Kategori = Kategori::find($id);

        //jika data tidak ditemukan
        if (!$Kategori) {
            return response()->json([
                'status' => 'error',
                'error' => 'data tidak ditemukan'
            ], 422);
        }

        //update data ke database
        $Kategori->fill($request->all());
        $simpan = $Kategori->save();

        if ($simpan) {
            return response()->json([
                'status' => 'success',
            ], 201);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'gagal menyimpan data'
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //cari data berdasarkan id
        $Kategori = Kategori::find($id);

        //jika data tidak ditemukan
        if (!$Kategori) {
            return response()->json([
                'status' => 'error',
                'error' => 'data tidak ditemukan'
            ], 422);
        }

        $hapus = $Kategori->delete();
        if ($hapus) {
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil dihapus'
            ], 201);

        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'gagal menghapus data'
            ], 422);
        }
    }
}