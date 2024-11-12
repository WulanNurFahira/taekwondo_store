<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Supplier;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalproduk = Produk::count();
        $totalsupplier = Supplier::count();
        $totalpenjualan = Penjualan::count();
        $penjualan = Penjualan::all();
        $produk = produk::all();
        $totaluser = User::count();
        $user = User::all();
        $supplier = Supplier::all();
        return view('home.dashboard', compact('produk','supplier','user','penjualan','totaluser','totalpenjualan', 'totalproduk', 'totalsupplier'));
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
