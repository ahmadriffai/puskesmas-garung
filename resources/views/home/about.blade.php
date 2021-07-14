@extends('layouts.app')

@section('content')

@section('judul', 'Tentang Puskesmas Garung')

@section('content')
    <div class="row text-center" id="#infoKesehatan">
        <div class="col-sm-3">
            <img src="{{ asset('/src/logo-puskesmas-baru.png') }}" alt="" class="img-thumbnail">
        </div>
        <div class="col-sm-9 mt-2">
            Puskesmas Garung merupakan salah satu dianatara 10 Puskesmas di Indonesia yang sudah teragreditasi pada tahun pertama. Dari 600 pendaftar perndafar pertama untuk diakreditasikan. hanya lolos 10 Puskesmas , salah satuya adalah Puskesmas Garung.
        </div>
    </div>
@endsection
