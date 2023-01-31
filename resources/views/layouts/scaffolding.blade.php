@extends('layouts.app')

@section('app')
<header class="d-flex align-items-center justify-content-between px-2 text-black sticky-top shadow">
    <div class="brand-title" id="brand_title">
        <img src="{{ asset('favicon.png') }}" alt="Logo" width="80px" height="80px" class="rounded-circle bg-white p-2 shadow">
        <span class="fs-4">{{ config('app.name') }}</span>
    </div>
    <div class="weather-container" id="weather_container">
    </div>
    <div class="date-time-container">
        <span class="text-center">
            <small class="d-block" id="time"></small>
            <small class="d-block" id="date"></small>
        </span>
    </div>
    <div class="search-container px-0">
        <div class="search-input d-flex align-items-center w-100 rounded-pill form-control ps-2 pe-0 border-0">
            <input type="text" class="border-0 w-100 bg-transparent" id="search" name="search" placeholder="Buscar">
            <span class="btn d-flex align-items-center"><i class="fa-solid fa-magnifying-glass"></i></span>
        </div>
    </div>
</header>
<nav class="shadow-lg">
    <div class="nav-circles-container">
        <div class="circle-1 rounded-circle shadow-lg"></div>
        <div class="circle-2 rounded-circle shadow-lg"></div>
        <dir class="circle-3 rounded-circle shadow-lg"></dir>
    </div>
    <div class="nav-container d-flex flex-column justify-content-between">
        <div class="btn-open-nav rounded-circle d-flex align-items-center justify-content-end pe-2 shadow" id="open_nav" title="Mostrar barra de navegación">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
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
        <div class="h-100 mb-4 overflow-scroll">
            <ul class="nav">
                <li class="nav-item w-100">
                    <a href="{{ route('home') }}" class="btn nav-link text-start text-dark">
                        <i class="fa-solid fa-house me-2"></i>
                        {{ __('Inicio') }}
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="/categories" class="btn nav-link text-start text-dark">
                        <i class="fa-solid fa-bookmark me-2"></i>
                        {{ __('Categorías') }}
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a href="/providers" class="btn nav-link text-start text-dark">
                        <i class="fa-solid fa-people-group me-2"></i>
                        {{ __('Proveedores') }}
                    </a>
                </li>
                <li class="nav-item w-100">
                    <button class="btn w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#stock" aria-expanded="false" aria-controls="stock">
                        <i class="fa-solid fa-caret-right me-2"></i>
                        <i class="fa-solid fa-cubes me-2"></i>
                        {{ __('Almacén') }}
                    </button>
                    <div class="collapse px-3" id="stock">
                        <div class="bg-card card card-body border-0">
                            <ul class="nav">
                                <li class="nav-item w-100">
                                    <a href="/add_product" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-plus me-2"></i>
                                        {{ __('Agregar producto') }}
                                    </a>
                                </li>
                                <li class="nav-item w-100">
                                    <a href="/show_products" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-shapes me-2"></i>
                                        {{ __('Mostrar productos') }}
                                    </a>
                                </li>
                                <li class="nav-item w-100">
                                    <a href="/sold_out" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-skull-crossbones me-2"></i>
                                        {{ __('Productos agotados') }}
                                    </a>
                                </li>
                                <li class="nav-item w-100">
                                    <a href="/run_out" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-triangle-exclamation me-2"></i>
                                        {{ __('Productos por agotarse') }}
                                    </a>
                                </li>
                                <li class="nav-item w-100">
                                    <a href="/latest_additions" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-list-check me-2"></i>
                                        {{ __('Últimos agregados') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item w-100">
                    <button class="btn w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#accounting" aria-expanded="false" aria-controls="accounting">
                        <i class="fa-solid fa-caret-right me-2"></i>
                        <i class="fa-solid fa-calculator me-2"></i>
                        {{ __('Contabilidad') }}
                    </button>
                    <div class="collapse px-3" id="accounting">
                        <div class="bg-card card card-body border-0">
                            <ul class="nav">
                                <li class="nav-item w-100">
                                    <a href="/cash_register" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-cash-register me-2"></i>
                                        {{ __('Corte de caja') }}
                                    </a>
                                </li>
                                <li class="nav-item w-100">
                                    <a href="/store_cards" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-table-list me-2"></i>
                                        {{ __('Tarjetas de almacén') }}
                                    </a>
                                </li>
                                <li class="nav-item w-100">
                                    <a href="/sales" class="nav-link px-0 text-dark">
                                        <i class="fa-solid fa-chart-line me-2"></i>
                                        {{ __('Ventas') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="mb-4">
            <button class="btn w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="user">
                <i class="fa-solid fa-caret-right me-2"></i>
                <i class="fa-solid fa-user me-2 rounded-circle border p-2 shadow"></i>
                {{ Auth::user()->name }}
            </button>
            <div class="collapse px-3" id="user">
                <div class="bg-card card card-body border-0">
                    <ul class="nav text-dark">
                        <li class="nav-item border-dark border-bottom w-100">
                            <a href="/config" class="nav-link px-2 text-dark">
                                <i class="fa-solid fa-gear me-2"></i>
                                {{ __('Configuración') }}
                            </a>
                        </li>
                        <li class="nav-item w-100 mt-2 text-center">
                            <a href="{{ route('logout') }}" class="nav-link px-0 pb-0 text-dark" onclick="event.preventDefault(); document.querySelector('#logout_form').submit();">
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
        @yield('scaffolding')
        @yield('scaffolding')
        @yield('scaffolding')
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
<footer class="d-flex align-items-center justify-content-between shadow-lg px-4">
    <div class="text-center">
        <span class="text-muted">Creado y diseñado por Guillermo Jiménez</span>
    </div>
    <div>
        <span class="text-muted">Xzunun &copy; 2023</span>
    </div>
    <div>
        <span class="btn btn-primary rounded-circle" title="Ir al principio"><i class="fa-solid fa-caret-up"></i></span>
    </div>
</footer>
@endsection