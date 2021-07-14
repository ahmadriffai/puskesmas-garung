@extends('layouts.app')

@section('content')

<style>
    .card-body{
        margin-top: -70px;
    }
    .layanan:hover{
        transform: translateY(-5px);
    }

</style>

@section('judul', 'Pilih Layanan Yang Anda Butuhkan')


<div class="row mb-5">
    @foreach ($layanan as $row)
        <div class="col-md-3">
            <a href="{{ route('daftar.index',['idLayanan' => $row['id']]) }}" class="nav-link layanan">
                <div class="card shadow border-0" >
                    <img src="{{ asset('src/layanan-image.jpg') }}" class="card-img-top rounded-3" alt="...">
                    <div class="card-body text-light">
                        <p class="shadow">Layanan <br> <b>{{$row->layanan}}</b></p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

<div class="row mt-5">
    <div class="col-12">
        <h4 class="text-success text-center">
            Tentang Puskesmas Garung
        </h4>
    </div>
    <hr>
</div>

<div class="row text-center" id="#infoKesehatan">
    <div class="col-sm-3">
        <img src="{{ asset('/src/logo-puskesmas-baru.png') }}" alt="" class="img-thumbnail">
    </div>
    <div class="col-sm-9 mt-2">
        Puskesmas Garung merupakan salah satu dianatara 10 Puskesmas di Indonesia yang sudah teragreditasi pada tahun pertama. Dari 600 pendaftar perndafar pertama untuk diakreditasikan. hanya lolos 10 Puskesmas , salah satuya adalah Puskesmas Garung.
    </div>
</div>



<div class="row mt-5">
    <div class="col-12">
        <h4 class="text-success text-center">
            Info Kesehatan
        </h4>
    </div>
    <hr>
</div>


<div class="row" id="about">
    @foreach ($infoKes as $row)
        <div class="col-md-3">
            <a href="" class="nav-link layanan">
                <div class="card shadow border-0" >
                    <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top rounded-3" alt="...">
                    <div class="card-body text-light">
                        <p>Artikel <br> <b>{{$row->judul}}</b></p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
