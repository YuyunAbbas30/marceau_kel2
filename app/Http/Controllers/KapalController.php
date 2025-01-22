<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KapalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil data dari query string
        $asal = $request->input('lokasi_keberangkatan');
        $tujuan = $request->input('lokasi_tujuan');
        $tanggal = $request->input('waktu_keberangkatan');

        // // Ambil jadwal kapal dari database berdasarkan data yang diterima
        $kapal = DB::table('kapals')
                    ->where('lokasi_keberangkatan', $asal)
                    ->where('lokasi_tujuan', $tujuan)
                    ->whereDate('waktu_keberangkatan', $tanggal)
                    ->get();
        
        // $kapal = Kapal::with( 'tiket')
        //             ->where('lokasi_keberangkatan', $asal)
        //             ->where('lokasi_tujuan', $tujuan)
        //             ->whereDate('waktu_keberangkatan', $tanggal)
        //             ->get();
        
        // $jadwal = DB::table('jadwal_kapal')
        //             ->join('tiket', 'jadwal_kapal.id_kapal', '=', 'tiket.id_kapal')
        //             ->where('waktu_keberangkatan' , $request->waktu_keberangkatan)
        //             ->first();
        // $kapal = DB::table('kapals')
        //             ->join('tikets','kapals.id_tiket', '=', 'tikets.id_tiket')
        //             ->where('waktu_keberangkatan' , $request->waktu_keberangkatan)
        //             ->get();
                    
            return view('mencari_tiket', ['data' => $kapal]);
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
