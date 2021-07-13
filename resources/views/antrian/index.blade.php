@extends('layouts.app')


@section('content')

<style>
    .nomer{
        font-size: 100px;
    }
</style>

@error('nama')
    <div class="alert alert-danger text-center">{{ $message }}</div>
@enderror

<div class="row">
    <div class="col-12">
        <h3 class="text-success text-center">Antrian Sekarang</h3>
    </div>
    <hr>
</div>

<div class="row">
    <div class="col-12">
        <div class="card bg-light border-0 text-center">
            <div class="card-body">
                <h1 class="text-success nomer">404</h1>

                {{-- Form Ambil Antrian  --}}

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Ambil Antrian
                </button>


                <h2>Perkiraan Waktu</h2>
                <div class="card bg-white border-0 text-center mx-auto p-0" style="width: 12rem;">
                    <div class="card-body">
                        <h3>22:22:00</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Isikan Nama Untuk Mengambil Antrian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{ route('antrian.store') }}" method="post">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
            <input type="text" name="nama" class="form-control"  placeholder="nama anda">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="sumbit" class="btn btn-success">Ambil</button>
        </div>
        </div>
    </form>
</div>
</div>

@endsection
