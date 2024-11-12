@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> 
                    <h3>Product Data Page</h3>
                    </h2>
                    <a href="/produk/tambah" class="btn btn-primary">Add Data(+)</a>
                    <br>
                    <br>
                    <div class="table-responsive">
          <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                          <th> No. </th>
                            <th> Image </th>
                            <th>Product Name</th>
                            <th> Price </th>
                            <th> Stock </th>
                            <th> Supplier ID </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($produk as $produk)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$produk->gambar) }}"
                                            class="rounded" style="width: 130px; height:130px;">
                                        </td>
                                                <td>{{ $produk->nama_produk }}</td>
                                                <td>Rp.{{ number_format($produk->harga) }}</td>
                                                <td>{{ $produk->stok }}</td>
                                                <td>{{ $produk->supplier->nama_supplier }}</td>
                                                <td><a class="btn btn-warning" href="/produk/{{ $produk->id }}/show">Edit</a>
                                                    <a class="btn btn-danger" href="/produk/{{ $produk->id }}/delete"
                                                        onclick="return confirm('yakin mau di hapus ?')">Delete</a></td>
                                            </tr>
                                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection