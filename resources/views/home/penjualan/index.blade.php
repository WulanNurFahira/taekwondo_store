@extends('layouts.master');
@section('title','user');
@section('content')

<div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> 
                      <table class="table table-bordered table-striped">
                    <h3>Page Sales</h3>
                    <td><a href="/penjualan/tambah" class="btn btn-primary">Add Data (+)</a>
                    <a href="/penjualan/cetak" class="btn btn-secondary">Print</a></td>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                          <th> No. </th>
                            <th> Nama Customer </th>
                            <th> Total Price </th>
                            <th> Total Pay </th>
                            <th> Final Pay </th>
                            <th> Date</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($penjualan as $penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $penjualan->nama_customer }}</td>
                                                <td>Rp.{{ number_format ($penjualan->total_harga) }}</td>
                                                <td>Rp.{{ number_format ($penjualan->total_biaya) }}</td>
                                                <td>Rp.{{ number_format ($penjualan->bayar_akhir) }}</td>
                                                <td>{{ $penjualan->created_at }}</td>
                                                <td>
                                                  @if($penjualan->status == "belum selesai")
                                                  <a class="btn btn-secondary" href="/penjualan/{{ $penjualan->id }}/edit">Add Pesanan</a>
                                                  @else
                                                  @endif
                                                    <a class="btn btn-danger" href="/penjualan/{{ $penjualan->id }}/delete"
                                                        onclick="return confirm('yakin mau di hapus ?')">Delete</a>
                                                        <a class="btn btn-primary" href="/penjualan/{{ $penjualan->id}}/struk">Struk</a>
                                                </td>
                                            </tr>
                                        @endforeach
                        </tbody>
                      </table>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection

