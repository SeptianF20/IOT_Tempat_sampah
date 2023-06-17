<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BobotSampah;
use App\Models\IndikatorSampah;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //
    public function index()
    {

        $sampah_plastik = BobotSampah::sum('sampah_plastik');
        $sampah_kertas = BobotSampah::sum('sampah_kertas');
        $sampah_kaleng = BobotSampah::sum('sampah_kaleng');
        $total_sampah = BobotSampah::sum('total_sampah');

        $indikator_sampah_plastik_terbaru_lantai1 = IndikatorSampah::where('jenis', 'plastik')
            ->where('lokasi', 'lantai_1')
            ->orderBy('id', 'desc')
            ->get()
            ->first();
        $indikator_sampah_plastik_terbaru_lantai1_persen = ($indikator_sampah_plastik_terbaru_lantai1->tinggi / 25) * 100;

        $indikator_sampah_kertas_terbaru_lantai1 = IndikatorSampah::where('jenis', 'kertas')
        ->where('lokasi', 'lantai_1')
        ->orderBy('id', 'desc')
        ->get()
        ->first();
        $indikator_sampah_kertas_terbaru_lantai1_persen = ($indikator_sampah_kertas_terbaru_lantai1->tinggi / 25) * 100;

        $indikator_sampah_kaleng_terbaru_lantai1 = IndikatorSampah::where('jenis', 'kaleng')
        ->where('lokasi', 'lantai_1')
        ->orderBy('id', 'desc')
        ->get()
        ->first();
        $indikator_sampah_kaleng_terbaru_lantai1_persen = ($indikator_sampah_kaleng_terbaru_lantai1->tinggi / 25) * 100;

        $indikator_sampah_plastik_terbaru_lantai2 = IndikatorSampah::where('jenis', 'plastik')
            ->where('lokasi', 'lantai_2')
            ->orderBy('id', 'desc')
            ->get()
            ->first();
        $indikator_sampah_plastik_terbaru_lantai2_persen = ($indikator_sampah_plastik_terbaru_lantai2->tinggi / 25) * 100;

        $indikator_sampah_kertas_terbaru_lantai2 = IndikatorSampah::where('jenis', 'kertas')
            ->where('lokasi', 'lantai_2')
            ->orderBy('id', 'desc')
            ->get()
            ->first();
        $indikator_sampah_kertas_terbaru_lantai2_persen = ($indikator_sampah_kertas_terbaru_lantai2->tinggi / 25) * 100;

        $indikator_sampah_kaleng_terbaru_lantai2 = IndikatorSampah::where('jenis', 'kaleng')
        ->where('lokasi', 'lantai_2')
        ->orderBy('id', 'desc')
        ->get()
        ->first();
        $indikator_sampah_kaleng_terbaru_lantai2_persen = ($indikator_sampah_kaleng_terbaru_lantai1->tinggi / 25) * 100;



        $total_sampah_bulanan = BobotSampah::select(DB::raw("SUM(total_sampah) as count"), DB::raw("MONTHNAME(tanggal) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(tanggal)"))
        ->pluck('count', 'month_name');

        $sampah_plastik_bulanan = BobotSampah::select(DB::raw("SUM(sampah_plastik) as count"), DB::raw("MONTHNAME(tanggal) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(tanggal)"))
        ->pluck('count', 'month_name');

        $sampah_kertas_bulanan = BobotSampah::select(DB::raw("SUM(sampah_kertas) as count"), DB::raw("MONTHNAME(tanggal) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(tanggal)"))
        ->pluck('count', 'month_name');

        $sampah_kaleng_bulanan = BobotSampah::select(DB::raw("sum(sampah_kaleng) as count"), DB::raw("MONTHNAME(tanggal) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(tanggal)"))
        ->pluck('count', 'month_name');

        $labels = $sampah_plastik_bulanan->keys();
        $data_sampah_plastik_bulanan = $sampah_plastik_bulanan->values();
        $data_sampah_kertas_bulanan = $sampah_kertas_bulanan->values();
        $data_sampah_kaleng_bulanan = $sampah_kaleng_bulanan->values();


        return view('contents.dashboard.dashboard', compact('sampah_plastik', 'sampah_kertas', 'sampah_kaleng', 'total_sampah', 'labels', 'data_sampah_plastik_bulanan', 'data_sampah_kertas_bulanan', 'data_sampah_kaleng_bulanan' , 'indikator_sampah_plastik_terbaru_lantai1', 'indikator_sampah_plastik_terbaru_lantai1_persen', 'indikator_sampah_kertas_terbaru_lantai1', 'indikator_sampah_kertas_terbaru_lantai1_persen', 'indikator_sampah_kaleng_terbaru_lantai1', 'indikator_sampah_kaleng_terbaru_lantai1_persen', 'indikator_sampah_plastik_terbaru_lantai2', 'indikator_sampah_plastik_terbaru_lantai2_persen', 'indikator_sampah_kertas_terbaru_lantai2', 'indikator_sampah_kertas_terbaru_lantai2_persen', 'indikator_sampah_kaleng_terbaru_lantai2', 'indikator_sampah_kaleng_terbaru_lantai2_persen'));
    }

}
