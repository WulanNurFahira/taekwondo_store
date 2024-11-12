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
                            <div class="responsive"></div>
                            <table class="table table-bordered table-striped">
                        <h3>Add Supplier Data</h3>
                        <a href="/supplier" class="btn btn-warning">Back</a>
                        </div>
                        <div class="card-body">
                            <form action="/supplier/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Supplier Name</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <br>
                                    <label for="" class="form-label">Email</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <br>
                                    <label for="" class="form-label">Number Phone</label>
                                            <input 
                                                type="number"
                                                class="form-control"
                                                name="no_telp"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                    />
                                    <br>
                                    <label for="" class="form-label">Address</label>
                                            <input 
                                                type="textarea"
                                                class="form-control"
                                                name="alamat"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                    />
                                    <br>
                                </div>
                                <button class="btn btn-info" type="submit">SUBMIT</button>
                            </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection