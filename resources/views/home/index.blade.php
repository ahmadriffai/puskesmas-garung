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


<div class="row">
    @foreach ($layanan as $row)
        <div class="col-md-3">
            <a href="{{ route('daftar.index',['idLayanan' => $row['id']]) }}" class="nav-link layanan">
                <div class="card shadow border-0" >
                    <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top rounded-3" alt="...">
                    <div class="card-body text-light">
                        <p>Layanan <br> <b>{{$row->layanan}}</b></p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
