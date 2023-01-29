@extends('layouts.app')

@section('app')
<header class="border border-dark text-white">
    <span>Aquí va el header</span>
    <span class="btn btn-primary" id="open_nav">Abrir nav</span>
    <span class="btn btn-primary" id="close_nav">Cerrar nav</span>
</header>
<nav class="border border-dark text-white">
    <span>Aquí va el nav</span>
</nav>
<main class="text-white">
    <section class="border border-dark">
        <span>Aquí va todo el contenido</span>
        <span class="btn btn-warning" id="open_aside">Abrir aside</span>
        <span class="btn btn-warning" id="close_aside">Cerrar aside</span>
        @yield('scaffolding')
    </section>
    <aside class="border border-dark">
        <span>Aquí va el aside</span>
    </aside>
</main>
<footer class="border border-dark text-white">
    <span>Aquí va el footer</span>
</footer>
@endsection