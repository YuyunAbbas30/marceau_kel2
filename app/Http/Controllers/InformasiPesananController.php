<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Kapal;
use Illuminate\Http\Request;
use App\Models\InformasiPesanan;
use Illuminate\Support\Facades\DB;
use Midtrans\Transaction;

class InformasiPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    
    public function create(Request $request)
    {

        // Validasi id_kapal ada di request
        $kapal = Kapal::find($request->id_kapal);
        if (!$kapal) {
            return redirect()->route('mencari_tiket')->with('error', 'Kapal tidak ditemukan.');
        }

        return view('informasi_pesanan', compact('kapal'));
    }

    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'nama_penumpang' => 'required|string|max:200',
            'no_identitas' => 'nullable|string|max:100',
            'kabin' => 'required|string|max:100',
            'gender' => 'required|in:laki-laki,Perempuan',
            'id_kapal' => 'required|exists:kapals,id_kapal'  // Pastikan id_kapal valid dan ada
        ]);

        // Menyimpan informasi pesanan beserta id_kapal
        $informasiPesanan = InformasiPesanan::create([
            'id_kapal' => $request->id_kapal,
            'nama_penumpang' => $request->nama_penumpang,
            'no_identitas' => $request->no_identitas,
            'kabin' => $request->kabin,
            'gender' => $request->gender,
        ]);
        
        // Redirect ke halaman dengan pesan sukses
        return redirect()->route('pembayaran', ['id_kapal' => $request->id_kapal])
                        ->with('success', 'Pesanan berhasil dibuat');

    }

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    // Ambil informasi pesanan berdasarkan id dan eager load kapal
    $informasiPesanan = InformasiPesanan::with('kapal')->findOrFail($id);

    return view('informasi_pesanan.show', compact('informasiPesanan'));
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
