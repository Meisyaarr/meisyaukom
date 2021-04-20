@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                    <h5 class="font-weight-bold">Daftar Barang</h5>
                        <div class="d-flex px-2 py-2">
                            <div class="mb-3">
                                <a href="{{route('barang.create')}}" class="btn btn-outline-primary">Buat Request</a>
                            </div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Suplier</th>
                                        <th>Nama Barang</th>
                                        <th>Phone</th>
                                        <th>Stock</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection