@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('app')
<div class="container-fluid vh-100 d-flex align-items-center">
    <div class="row w-100 mx-auto justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('favicon.png') }}" alt="Logo" width="120px" height="120px">
                        <h1 class="fw-light">{{ config('app.name') }}</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Usuario" value="{{ old('email') }}" required>
                            <label for="email" class="form-label"><i class="fa-solid fa-user me-2"></i>{{ __('Usuario') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required>
                            <label for="password" class="form-label"><i class="fa-solid fa-lock me-2"></i>{{ __('Contraseña') }}</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-arrow-right-to-bracket me-2"></i>{{ __('Ingresar') }}</button>
                        </div>
                        <div class="text-end">
                            <small><a href="{{ route('register') }}">{{ __('No tengo una cuenta...') }}</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection