@extends('layouts.app')

@section('app')
<header class="d-flex align-items-center px-2 text-white sticky-top shadow">
    <div class="btn-open-nav p-2" id="open_nav">
        <i class="fa-solid fa-bars fa-2x" title="Mostrar barra de navegación"></i>
    </div>
    <span>Aquí va el header</span>
</header>
<nav class="shadow-lg">
    <div class="nav-circles-container">
        <div class="circle-1 rounded-circle shadow-lg"></div>
        <div class="circle-2 rounded-circle shadow-lg"></div>
        <dir class="circle-3 rounded-circle shadow-lg"></dir>
    </div>
    <div class="nav-container d-flex flex-column justify-content-between">
        <div class="btn-close-nav rounded-circle d-flex align-items-center ps-2 shadow" id="close_nav" title="Ocultar barra de navegación">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="text-center my-4">
            <img src="{{ asset('favicon.png') }}" class="shadow border rounded-circle p-2" alt="Logo" width="120px" height="120px">
            <div class="mt-2">
                <span class="fs-4">{{ config('app.name') }}</span>
                <small class="d-block text-secondary">Tlapalería</small>
            </div>
        </div>
        <div class="h-100 mb-4">
            Aquí van los items
        </div>
        <div class="mb-4">
            <button class="btn w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa-solid fa-caret-right me-2"></i>
                <i class="fa-solid fa-user me-2 rounded-circle border p-2 shadow"></i>
                {{ Auth::user()->name }}
            </button>
            <div class="collapse px-3" id="collapseExample">
                <div class="card card-body bg-white border-0">
                    <ul class="nav text-dark">
                        <li class="nav-item border-bottom w-100">
                            <a href="/config" class="nav-link px-0">
                                <i class="fa-solid fa-gear me-2"></i>
                                {{ __('Configuración') }}
                            </a>
                        </li>
                        <li class="nav-item w-100 mt-2 text-center">
                            <a href="{{ route('logout') }}" class="nav-link px-0 pb-0" onclick="event.preventDefault(); document.querySelector('#logout_form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Cerrar sesión
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logout_form">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<main>
    <section>
        @yield('scaffolding')
        @yield('scaffolding')
        @yield('scaffolding')
    </section>
    <aside class="shadow">
        <div class="btn-close-aside rounded-circle d-flex align-items-center pe-2 justify-content-end" id="close_aside" title="Ocultar barra lateral">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="btn-open-aside rounded-circle d-flex align-items-center ps-2" id="open_aside" title="Mostrar barra lateral">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
    </aside>
</main>
<footer>
    <span>Aquí va el footer</span>
</footer>
@endsection