@extends('layouts.app')

@section('content')

@section('judul', 'Info Kesehatan')

@section('content')


<div class="row" id="about">
    @foreach ($infoKes as $row)
        <div class="col-md-3">
            <a href="" class="nav-link layanan">
                <div class="card shadow border-0" >
                    <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top rounded-3" alt="...">
                    <div class="card-body text-success">
                        <p>Artikel <br> <b>{{$row->judul}}</b></p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
