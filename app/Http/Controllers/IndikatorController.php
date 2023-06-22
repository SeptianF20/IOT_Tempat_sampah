<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Indikator;


class UltrasonicController extends Controller
{
    public function store(Request $request)
    {
        // // Ambil data tinngi dari request
        // $tinggi_plastik = $request->tinggi_plastik;
        // $tinggi_kertas = $request->tinggi_kertas;
        // $tinggi_kaleng = $request->tinggi_kaleng;

        // // Simpan data jarak ke database
        // DB::table('sensor_ultrasonik')->insert([
        //     'tinggi_plastik' => $tinggi_plastik,
        //     'tinggi_plastik' => $tinggi_plastik,
        //     'tinggi_plastik' => $tinggi_plastik,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // return response()->json(['success' => true]);
         // Ambil data jarak terbaru dari database

         $indikator = DB::table('indikator')->latest()->first();

         // Simpan data jarak terbaru ke tabel indikator
         Indikator::create([
             'tinggi_plastik' => $indikator->tinggi_plastik,
             'tinggi_kertas' => $indikator->tinggi_kertas,
             'tinggi_kaleng' => $indikator->tinggi_kaleng,
         ]);

         // Kembalikan response berupa json
         return response()->json([
             'message' => 'Data berhasil disimpan',
             'data' => $indikator
         ]);
    }
}
