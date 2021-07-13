@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <h3 class="text-success text-center">Antrian Atas Nama {{ $antrian->nama }}</h3>
    </div>
    <hr>
</div>

<div class="row">
    <div class="col-12">
        <div class="card bg-light border-0 text-center">
            <div class="card-body">
                <h1 class="text-success nomer">{{ $antrian->nomer_antrian }}</h1>

                <h2>Perkiraan Waktu</h2>
                <div class="card bg-white border-0 text-center mx-auto p-0" style="width: 12rem;">
                    <div class="card-body">
                        <h3>22:22:00</h3>
                    </div>
                </div>
                <h5 class="text-success">* datang 5 menit sebelumnya</h5>
            </div>
        </div>
    </div>
</div>

@endsection
