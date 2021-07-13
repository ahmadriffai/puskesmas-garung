@extends('layouts.app')

@section('judul', 'Ambil antrian untuk mendapat pelayanan ')


@section('content')

@error('nik')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
@enderror

<div class="row">
    <div class="col-12">
        <div class="card bg-light border-0">
            <div class="card-body">
                <h5>Antrian Hari Ini
                @if ($antrian == null)
                    <span class="badge bg-success"> Belum ada antrian hari</span>

                @else
                    <span class="badge bg-success"> {{ $antrian->nomer_antrian }}</span>

                @endif

                </h5>
                <div class="alert alert-secondary" role="alert">
                    Jika sudah pernah mengisi data diri silahkan langsung ambil antrian jika belum silahkan isi data diri pada form di bawah
                </div>
                {{-- modal buttom --}}
                <button
                    type="button"
                    class="btn btn-warning"
                    data-bs-toggle="modal"
                    data-bs-target="#antrianModal"
                >
                    Ambil Antrian
                </button>

            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        <div class="card bg-light border-0">
            <div class="card-body px-5">
                <h5 class="text-center">Isi Data Diri</h5>
                <div class="container-fluid">
                    <form action="{{ route('daftar.store') }}" method="post">

                        @csrf

                        <input type="hidden" name="idLayanan" value="{{ $idLayanan }}">
                        <div class="mb-3">
                            <input
                                type="text"
                                name="nik"
                                class="form-control rounded-pill px-4 py-2 border-0 text-secondary
                                @error('nik')
                                is-invalid
                                @enderror
                                "
                                placeholder="NIK">
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                name="nama"
                                class="form-control rounded-pill px-4 py-2 border-0 text-secondary
                                @error('nama')
                                is-invalid
                                @enderror
                                "
                                placeholder="Nama Lengkap">
                            <div
                                id="validationServerUsernameFeedback"
                                class="invalid-feedback ml-3">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                name="no_hp"
                                class="form-control rounded-pill px-4 py-2 border-0 text-secondary
                                @error('no_hp')
                                is-invalid
                                @enderror
                                "
                                placeholder="Nomer Hanphone">
                            <div
                                id="validationServerUsernameFeedback"
                                class="invalid-feedback ml-3">
                                    @error('no_hp')
                                        {{ $message }}
                                    @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <input
                                type="text"
                                name="alamat"
                                class="form-control rounded-pill px-4 py-2 border-0 text-secondary
                                @error('nama')
                                is-invalid
                                @enderror
                                "
                                placeholder="Alamat Lengkap">
                            <div
                                id="validationServerUsernameFeedback"
                                class="invalid-feedback ml-3">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                            </div>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea
                                class="form-control"
                                name="keluhan"
                                id="floatingTextarea2"
                                style="height: 100px">
                            </textarea>
                            <label for="floatingTextarea2">Keluhan</label>
                            <div
                                id="validationServerUsernameFeedback"
                                class="invalid-feedback ml-3">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success rounded-pill">Sumbit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="antrianModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Ambil Antrian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{ route('daftar.ambilAntrian') }}" method="post">
                @csrf

            <div class="mb-3">
                <input
                    type="text"
                    name="nik"
                    class="form-control rounded-pill px-4 py-2 text-secondary
                    @error('nik')
                    is-invalid
                    @enderror
                    "
                    placeholder="NIK">
                <div class="mt-3 form-floating">
                    <textarea
                        class="form-control"
                        name="keluhan"
                        id="floatingTextarea2"
                        style="height: 100px">
                    </textarea>
                    <label for="floatingTextarea2">Keluhan</label>
                    <div
                        id="validationServerUsernameFeedback"
                        class="invalid-feedback ml-3">
                            @error('nama')
                                {{ $message }}
                            @enderror
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="sumbit" class="btn btn-success">Ambil</button>

        </form>
        </div>
        </div>
    </div>
</div>

@endsection


