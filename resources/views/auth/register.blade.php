@extends('layouts.app')

@section('title', 'Registrarse')

@section('app')
<div class="container-fluid vh-100 d-flex align-items-center">
    <div class="row w-100 mx-auto justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 bg-dark shadow-lg">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('favicon.png') }}" alt="Logo" class="rounded-circle shadow-lg" width="120px" height="120px">
                        <h1 class="fw-light mt-4 text-white">{{ __('Registrarse') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-secondary text-white @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
                            <label for="name" class="form-label text-white"><i class="fa-solid fa-user me-2"></i>{{ __('Nombre') }}</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control bg-secondary text-white @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                            <label for="email" class="form-label text-white"><i class="fa-solid fa-at me-2"></i>{{ __('Correo electrónico') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 g-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-secondary text-white @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required>
                                    <label for="password" class="form-label text-white"><i class="fa-solid fa-lock me-2"></i>{{ __('Contraseña') }}</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-secondary text-white" id="password-confirm" name="password_confirmation" placeholder="Confirmar contraseña" required>
                                    <label for="password-confirm" class="form-label text-white"><i class="fa-solid fa-lock me-2"></i>{{ __('Confirmar contraseña') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-end my-4">
                            <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-user-plus me-2"></i>{{ __('Registrar') }}</button>
                        </div>
                        <div class="text-end">
                            <small><a href="{{ route('login') }}" class="register-account-exist text-white">{{ __('¡Ya tengo un cuenta!') }}</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
