@extends('layouts.app')

@section('judul', 'Login Admin')

<style>
    .card{
        width: 80%;
        margin: 3 auto 10;
    }
</style>


@section('content')

    <div class="row text-center">
        <div class="col-md-12">
            @if(session('msg'))
            <div class="alert alert-danger" role="alert">
                {{ session('msg') }}
            </div>
            @endif

            <div class="card bg-light border-0">
                <div class="card-body px-5">

                    <h2 class="text-success">Login</h2>

                    <form action="{{ route('auth.login') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <input
                                type="email"
                                name="email"
                                class="form-control rounded-pill px-4 py-2 border-0 text-secondary
                                @error('email')
                                is-invalid
                                @enderror
                                "
                                placeholder="email">
                                <div
                                    id="validationServerUsernameFeedback"
                                    class="invalid-feedback ml-3">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                </div>
                        </div>



                        <div class="mb-3">
                            <input
                                type="password"
                                name="password"
                                class="form-control rounded-pill px-4 py-2 border-0 text-secondary
                                @error('password')
                                is-invalid
                                @enderror
                                "
                                placeholder="password">
                        </div>

                        <button type="submit" class="btn btn-success">Login</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
