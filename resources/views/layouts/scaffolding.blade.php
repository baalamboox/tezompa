@extends('layouts.app')

@section('app')
<header class="sticky-top">
    <nav class="navbar navbar-expand-sm bg-dark h-100 py-0">
        <div class="container-fluid bg-dark">
            <a class="d-flex align-items-center nav-link text-white d-sm-none" href="{{ route('home') }}">
                <img src="{{ asset('favicon.png') }}" alt="Logo" class="rounded-circle" width="36" height="36">
                <span class="mx-1">{{ config('app.name') }}</span>
            </a>
            <span class="navbar-toggler" id="btn_collapse_menu">
                <i class="fa-solid fa-ellipsis-vertical text-primary"></i>
            </span>
            <div class="collapse navbar-collapse" id="collapse_menu">
                <br>
                <ul class="navbar-nav d-flex flex-row align-items-center justify-content-md-between justify-content-sm-between justify-content-evenly w-100">
                    <li class="nav-item">
                        <div class="text-white" id="weather_container"></div>
                    </li>
                    <li class="nav-item d-sm-none d-md-block">
                        <div class="text-white text-center">
                            <small class="d-block" id="time"></small>
                            <small class="d-block" id="date"></small>
                        </div>
                    </li>
                    <li class="d-none d-sm-none d-md-block"></li>
                </ul>
                <br>
                <div class="d-flex align-items-center rounded bg-secondary">
                    <input type="text" class="bg-transparent text-white border-0 w-100 px-2" placeholder="Buscar">
                    <span class="btn d-flex text-primary" id="btn-search-on-page"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <hr class="d-block d-sm-none text-primary">
            </div>
        </div>
    </nav>
</header>
<nav class="d-flex flex-column justify-content-between bg-dark shadow-lg">


    <span class="btn-open-nav d-flex align-items-center justify-content-end  pe-1 rounded-end bg-dark text-white" id="open_nav" title="Mostrar barra de navegación">
        <i class="fa-solid fa-chevron-right text-primary"></i>
    </span>
    <span class="btn-close-nav d-flex align-items-center justify-content-end pe-1 rounded-end bg-dark text-white" id="close_nav" title="Ocultar barra de navegación">
        <i class="fa-solid fa-chevron-left text-primary"></i>
    </span>


    <div class="text-center my-4">
        <img src="{{ asset('favicon.png') }}" class="rounded-circle shadow-lg border p-1 bg-white" alt="Logo" width="120px" height="120px">
        <div class="mt-2">
            <span class="fs-4 text-white">{{ config('app.name') }}</span>
            <small class="d-block text-primary">{{ __('Tlapalería') }}</small>
        </div>
    </div>
    <div class="h-100 mb-4 overflow-scroll">
        <ul class="nav">
            <li class="nav-item w-100">
                <a href="{{ route('home') }}" class="btn nav-link text-start text-white">
                    <i class="fa-solid fa-house me-2"></i>
                    {{ __('Inicio') }}
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="/categories" class="btn nav-link text-start text-white">
                    <i class="fa-solid fa-bookmark me-2"></i>
                    {{ __('Categorías') }}
                </a>
            </li>
            <li class="nav-item w-100">
                <a href="/providers" class="btn nav-link text-start text-white">
                    <i class="fa-solid fa-people-group me-2"></i>
                    {{ __('Proveedores') }}
                </a>
            </li>
            <li class="nav-item w-100">
                <button class="btn w-100 text-start text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#stock" aria-expanded="false" aria-controls="stock">
                    <i class="fa-solid fa-caret-right me-2 text-primary"></i>
                    <i class="fa-solid fa-cubes me-2"></i>
                    {{ __('Almacén') }}
                </button>
                <div class="collapse px-3" id="stock">
                    <div class="card card-body border-0 bg-secondary">
                        <ul class="nav">
                            <li class="nav-item w-100">
                                <a href="/add_product" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-plus me-2"></i>
                                    {{ __('Agregar producto') }}
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a href="/show_products" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-shapes me-2"></i>
                                    {{ __('Mostrar productos') }}
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a href="/sold_out" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-skull-crossbones me-2"></i>
                                    {{ __('Productos agotados') }}
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a href="/run_out" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-triangle-exclamation me-2"></i>
                                    {{ __('Productos por agotarse') }}
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a href="/latest_additions" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-list-check me-2"></i>
                                    {{ __('Últimos agregados') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item w-100">
                <button class="btn w-100 text-start text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#accounting" aria-expanded="false" aria-controls="accounting">
                    <i class="fa-solid fa-caret-right me-2 text-primary"></i>
                    <i class="fa-solid fa-calculator me-2"></i>
                    {{ __('Contabilidad') }}
                </button>
                <div class="collapse px-3" id="accounting">
                    <div class="card card-body border-0 bg-secondary">
                        <ul class="nav">
                            <li class="nav-item w-100">
                                <a href="/cash_register" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-cash-register me-2"></i>
                                    {{ __('Corte de caja') }}
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a href="/store_cards" class="nav-link px-0 text-white">
                                    <i class="fa-solid fa-table-list me-2"></i>
                                    {{ __('Tarjetas de almacén') }}
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a href="/sales" class="nav-link px-0 text-white">
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
        <button class="btn w-100 text-start text-white" type="button" data-bs-toggle="collapse" data-bs-target="#user"
            aria-expanded="false" aria-controls="user">
            <i class="fa-solid fa-caret-right me-2 text-primary"></i>
            <i class="fa-solid fa-user me-2 rounded-circle border border-primary p-2 shadow"></i>
            {{ Auth::user()->name }}
        </button>
        <div class="collapse px-3" id="user">
            <div class="card card-body border-0 bg-secondary">
                <ul class="nav text-white">
                    <li class="nav-item border-dark border-bottom w-100">
                        <a href="/config" class="nav-link px-2 text-white">
                            <i class="fa-solid fa-gear me-2"></i>
                            {{ __('Configuración') }}
                        </a>
                    </li>
                    <li class="nav-item w-100 mt-2 text-center">
                        <a href="{{ route('logout') }}" class="nav-link px-0 pb-0 text-white"
                            onclick="event.preventDefault(); document.querySelector('#logout_form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                            {{ __('Cerrar sesión') }}
                        </a>
                        <form action="{{ route('logout') }}" method="POST" id="logout_form">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<main>
    @yield('scaffolding')
    @yield('scaffolding')
    @yield('scaffolding')
    @yield('scaffolding')
</main>
<footer class="d-flex align-items-center justify-content-center bg-dark shadow-lg sticky-bottom">
    <span class="text-white">Xzunun &copy; 2023</span>
</footer>
@endsection