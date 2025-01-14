<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kapal;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    /**
     * Menangani pencarian tiket berdasarkan asal, tujuan, dan tanggal.
     */
    public function index(Request $request)
    {
        // Ambil data dari query string
        $asal = $request->input('lokasi_keberangkatan');
        $tujuan = $request->input('lokasi_tujuan');
        $tanggal = $request->input('waktu_keberangkatan');

        // // Ambil jadwal kapal dari database berdasarkan data yang diterima
        // $jadwal = DB::table('jadwal_kapal')
        //             ->where('lokasi_keberangkatan', $asal)
        //             ->where('lokasi_tujuan', $tujuan)
        //             ->whereDate('waktu_keberangkatan', $tanggal)
        //             ->get();
        
        $kapal = Kapal::with( 'tiket')
                    ->where('lokasi_keberangkatan', $asal)
                    ->where('lokasi_tujuan', $tujuan)
                    ->whereDate('waktu_keberangkatan', $tanggal)
                    ->get();

        // $jadwal = DB::table('jadwal_kapal')
        //             ->join('tiket', 'jadwal_kapal.id_kapal', '=', 'tiket.id_kapal')
        //             ->where('waktu_keberangkatan' , $request->waktu_keberangkatan)
        //             ->first();
        // $kapal = DB::table('kapals')
        //             ->join('tikets','kapals.id_tiket', '=', 'tikets.id_tiket')
        //             ->where('waktu_keberangkatan' , $request->waktu_keberangkatan)
        //             ->get();
                    
        
        // if ($jadwal->isEmpty()) {
        //     return view('mencari_tiket')->with('message', 'Data tidak tersedia');
        // }
        
        return view('mencari_tiket', ['data' => $kapal]);
    }
}


