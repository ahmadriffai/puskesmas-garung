@extends('layouts.admin')

@section('judul', 'Halaman Admin')

@section('content')
<div class="row">
    @foreach ($layanan as $row)
    <div class="col-md-4 mt-3">
        <div class="card border-0 shadow bg-success">
            <div class="card-body">
                <h3 class="text-light">
                    {{$row->layanan}}
                </h3>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
