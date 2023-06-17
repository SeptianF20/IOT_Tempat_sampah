<?php

namespace App\Http\Controllers;

use App\Models\IndikatorSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Auth;

class IndikatorSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IndikatorSampah = DB::table('indikator_sampah')->orderBy('id', 'desc')->get();
        return view("contents.indikator_sampah.index", compact('IndikatorSampah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.indikator_sampah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tinggi' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
        ]);

        IndikatorSampah::create([
            'tinggi' => $request->tinggi,
            'jenis' => $request->jenis,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('indikator_sampah.index')
            ->with('success', 'Data Sampah created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $IndikatorSampah = IndikatorSampah::find($id);
        return view('contents.indikator_sampah.edit', compact('IndikatorSampah'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'tinggi' => 'required',
           'jenis' => 'required',
            'lokasi' => 'required',
        ]);

        $IndikatorSampah = IndikatorSampah::findOrFail($id);
        $IndikatorSampah->update([
            'tinggi' => $request->tinggi,
            'jenis' => $request->jenis,
            'lokasi' => $request->lokasi,
        ]);

        return redirect()->route('indikator_sampah.index')
            ->with('success', 'Berhasil mengubah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indikator_sampah = IndikatorSampah::all();
        $indikator_sampah->delete();
        return redirect()->route('indikator_sampah.index')
            ->with('success', 'Data Sampah Telah dihapus.');;
    }

    public function deleteAllData()
    {
    DB::table('indikator_sampah')->delete();
    // Lakukan sesuatu setelah menghapus semua data dalam tabel

    return redirect()->route('indikator_sampah.index')
    ->with('success', 'Data Sampah Telah dihapus.');;
    }
}

