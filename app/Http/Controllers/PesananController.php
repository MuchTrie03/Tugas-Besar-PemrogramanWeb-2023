<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class PesananController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'service-type' => 'required',
            'weight' => 'required',
            'total-price' => 'required',
        ]);

        // Simpan data pesanan ke dalam database
        $transaksi = new transaksi();
        $transaksi->napel = $request->input('name');
        $transaksi->nama_produk = $request->input('service-type');
        $transaksi->berat = $request->input('weight');
        $transaksi->total_harga = $request->input('total-price');
        $transaksi->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Pesanan berhasil disimpan');
    }
}
