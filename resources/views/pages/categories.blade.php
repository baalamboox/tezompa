@extends('layouts.scaffolding')

@section('title', 'Categorías')

@section('scaffolding')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="form-container border rounded shadow-lg p-4">
                <span class="border-title fs-5 text-white px-2 rounded-pill">Crear cateroría</span>
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center py-3">
                            <img src="{{ asset('img/logos/category.png') }}" alt="Logo" class="rounded-circle" width="100px" height="100px">
                            <span class="btn btn-primary rounded-pill mt-3"><i class="fa-solid fa-upload me-2"></i>{{ __('Subir') }}</span>
                        </div>
                        <div class="col-md-8 d-flex flex-column justify-content-center">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-pill border-0" id="" name="" placeholder="Nombre" required>
                                <label for="" class="form-label">{{ __('Nombre') }}</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-pill border-0" id="" name="" placeholder="Descripción" required>
                                <label for="" class="form-label">{{ __('Descripción') }}</label>
                            </div>
                            <div class="mt-4 text-end">
                                <button type="submit" class="btn btn-primary rounded-pill w-100"><i class="fa-solid fa-plus me-2"></i>{{ __('Crear') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row row-cols-lg-4 mt-5 g-4">
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="category-card card align-items-center">
                <img src="{{ asset('img/logos/category.png') }}" alt="Item" class="image-category position-relative rounded-circle shadow-lg" width="100px" height="100px">
                <div class="card-body">
                  <h5 class="card-title text-center">Nombre categoría</h5>
                  <p class="card-text text-muted">Aquí va una pequeña Descripción de cada una las categorías</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
