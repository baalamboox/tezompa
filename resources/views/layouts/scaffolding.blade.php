@extends('layouts.app')

@section('app')
<header class="d-flex align-items-center px-2 border border-dark text-white sticky-top">
    <div class="btn-open-nav p-2" id="open_nav">
        <i class="fa-solid fa-bars fa-2x" title="Mostrar barra de navegación"></i>
    </div>
    <span>Aquí va el header</span>
</header>
<nav class="border border-dark text-white">
    <div class="btn-close-nav rounded-circle d-flex align-items-center ps-2" id="close_nav" title="Ocultar barra de navegación">
        <i class="fa-solid fa-chevron-left"></i>
    </div>
    <div class="text-center my-4">
        <img src="{{ asset('favicon.png') }}" class="shadow border rounded-circle" alt="Logo" width="120px" height="120px">
        <div class="mt-2">
            <span class="fs-4">{{ config('app.name') }}</span>
            <small class="d-block text-secondary">Tlapalería</small>
        </div>
    </div>
    <span>Aquí va nav</span>
</nav>
<main class="text-white">
    <section class="border border-dark">
        <span>Aquí va todo el contenido</span>
        @yield('scaffolding')
        @yield('scaffolding')
        @yield('scaffolding')
        @yield('scaffolding')
        @yield('scaffolding')
    </section>
    <aside class="border border-dark">
        <div class="btn-close-aside rounded-circle d-flex align-items-center pe-2 justify-content-end" id="close_aside" title="Ocultar barra lateral">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="btn-open-aside rounded-circle d-flex align-items-center ps-2" id="open_aside" title="Mostrar barra lateral">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
        <span>Aquí va el aside</span>
    </aside>
</main>
<footer class="border border-dark text-white">
    <span>Aquí va el footer</span>
</footer>
@endsection