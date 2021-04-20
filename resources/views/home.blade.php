@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="jumbotron" style="background-image: url('img/pngtree-peach-blossom-aesthetic-spring-promotion-poster-background-material-image_142524.jpg')">
                <div class="container">
                    <h3 class="text-center text-dark">
                        Selamat Datang di Aplikasi Permintaan Barang
                    <h3 class="text-center text-dark">Uji Kompetensi Rekayasa Perangkat Lunak</h3>
                    </h3>
                    <br>
                    <br>
                    <h3 class="text-center text-dark">Meisya Yuniar</h3>
                </div>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
