@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<style>
    .input-group {
        position: relative;
    }
    .input-group-append {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 0 10px;
        cursor: pointer;
    }
</style>

<div class="content-wrapper">
    <section class="content">
        <div class="conteiner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="responsive">
                        <table class="table table-bordered table-striped">
                        <h3> 
                        Add Taekwondo Store Page</h3>
                        <a href="/produk" class="btn btn-warning ">Back</a>
                        </div>
                        <div class="card-body">
                            <form action="/produk/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Product ID</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="id_produk"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('id produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $mesage }}
                                    </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                    <label for="gambar" class="form-label">Picture</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $mesage }}
                                    </div>
                                    @enderror
                                    <br>
                                    <label for="" class="form-label">Product Name</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $mesage }}
                                    </div>
                                    @enderror
                                    <br>
                                    <label for="" class="form-label">Unit Price</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $mesage }}
                                    </div>
                                    @enderror
                                    <br>
                                    <label for="number" class="form-label">Stock</label>
                                        <div class="input-group">
                                            <input 
                                                type="number"
                                                class="form-control"
                                                name="stok"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $mesage }}
                                    </div>
                                    @enderror
                                            
                                </div>
                                <br>
                                <div class="mb-3">
                                            <label for="" class="form-label">Supplier ID</label>
                                                <select name="id_supplier" class="form-control">
                                                    <option value="">Pilih</option>
                                                    @foreach ($supplier as $supplier)
                                                    <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        
                                <button class="btn btn-info" type="submit">SUBMIT</button>
                                </table>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection