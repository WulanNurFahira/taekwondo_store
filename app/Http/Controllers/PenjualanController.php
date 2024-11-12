<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        
        return view('home.penjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'nama_customer' => $request->nama_customer,
            'total_harga'  => "0",
            'total_biaya' => "0",
            'bayar_akhir' => "0",
            'status' => "belum selesai",
        ]);
        return redirect('/penjualan');
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
     
        $detailpenjualan = DetailPenjualan::where('penjualan_id', $id)->get();
        $subtotal = DetailPenjualan::where('penjualan_id', $id)->sum('subtotal');
        $produk = Produk::all();
        $penjualan_id = $id;

        return view('home.penjualan.detailpenjualan.tambah', compact('detailpenjualan', 'produk', 'penjualan_id', 'subtotal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function struk($id)
    {
        $penjualan = Penjualan::with(['produk'])
        ->where($id);
        $produk = Produk::all();
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.struk', compact('penjualan'));
    }

    public function cetak()
    {
        $produk = Produk::all();
        $penjualan = Penjualan::all();
        return view('home.penjualan.cetak', compact('penjualan'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
}
