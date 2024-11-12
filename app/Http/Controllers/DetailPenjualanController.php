<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
      
        DetailPenjualan::create([
            'id_produk' => $request->id_produk,
            'penjualan_id' => $request->penjualan_id,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => $request->subtotal
        ]);

        return redirect('/penjualan' . '/' . $request->penjualan_id . '/edit');
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
        $detailpenjualan = DetailPenjualan::find($id);
        $detailpenjualan->delete();
        return redirect()->back();
    }

    public function checkout(Request $request, $id){
        $penjualan = Penjualan::find($id);
        $penjualan -> update([
        'total_harga' => $request->total,
        'total_biaya' => $request->total_bayar,
        'bayar_akhir' => $request->kembalian,
        'status' => 'selesai',
        ]);
        return redirect('/penjualan');
    }
}
