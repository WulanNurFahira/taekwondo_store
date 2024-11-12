@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> 
                    <h3>Supplier Data Page</h3>
                    </h2>
                    <a href="/supplier/tambah" class="btn btn-primary">Add Data(+)</a>
                    <br>
                    <br>
                    <div class="table-responsive">
          <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th> No. </th>
                            <th> Supplier Name </th>
                            <th> Email </th>
                            <th> Phone Number </th>
                            <th> Address </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach( $supplier as $supplier )
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $supplier->nama_supplier }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->no_telp }}</td>
                            <td>{{ $supplier->alamat }}</td>
                            <td><a class="btn btn-warning" href="/supplier/{{$supplier->id}}/show">Edit</a>
                                <a class="btn btn-danger" href="/supplier/{{$supplier->id}}/delete"
                                onclick="return confirm('yakin mau di hapus ?')">Delete</a>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection