@extends('layouts.scaffolding')

@section('title', 'Inicio')

@section('scaffolding')
<div class="container vh-100 py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-dark">
                <div class="card-header"><i class="fa-solid fa-house me-2"></i>{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <i class="fa-solid fa-user"></i>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
