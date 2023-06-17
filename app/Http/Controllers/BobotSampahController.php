<?php

namespace App\Http\Controllers;

use App\Models\BobotSampah;
use App\Models\Usulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Auth;

class BobotSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BobotSampah = DB::table('bobot_sampah')->orderBy('id', 'desc')->get();
        return view("contents.bobot_sampah.index", compact('BobotSampah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.bobot_sampah.create');
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
            'tanggal' => 'required',
            'sampah_plastik' => 'required',
            'sampah_kertas' => 'required',
            'sampah_kaleng' => 'required',
            'total_sampah' => 'required',
        ]);

        BobotSampah::create([
            'tanggal' => $request->tanggal,
            'sampah_plastik' => $request->sampah_plastik,
            'sampah_kertas' => $request->sampah_kertas,
            'sampah_kaleng' => $request->sampah_kaleng,
            'total_sampah' => $request->total_sampah,
        ]);

        return redirect()->route('bobot_sampah.index')
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

        $BobotSampah = BobotSampah::find($id);
        return view('contents.bobot_sampah.edit', compact('BobotSampah'));
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
            'tanggal' => 'required',
            'sampah_plastik' => 'required',
            'sampah_kertas' => 'required',
            'sampah_kaleng' => 'required',
            'total_sampah' => 'required',
        ]);

        $BobotSampah = BobotSampah::findOrFail($id);
        $BobotSampah->update([
            'tanggal' => $request->tanggal,
            'sampah_plastik' => $request->sampah_plastik,
            'sampah_kertas' => $request->sampah_kertas,
            'sampah_kaleng' => $request->sampah_kaleng,
            'total_sampah' => $request->total_sampah,
        ]);

        return redirect()->route('bobot_sampah.index')
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
        $bobot_sampah = BobotSampah::find($id);
        $bobot_sampah->delete();
        return redirect()->route('bobot_sampah.index')
            ->with('success', 'Data Sampah Telah dihapus.');;
    }
}
