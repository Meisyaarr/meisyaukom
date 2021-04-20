@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-primary">
                        <h5 class="font-weight-bold">
                            Perhatian !!!
                        </h5>
                        <h5>
                            Masukan semua informasi permintaan dibawah ini dengan lengkap dan benar
                        </h5>
                    </div>

                    <form action="" method="post">
                    <h5 class="font-weight-bold">Data Pribadi</h5>
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telp</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jumlah Stock</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jumlah Permintaan</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Kirim Permintaan</button>
                                <a href=""class="btn btn-secondary">cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection