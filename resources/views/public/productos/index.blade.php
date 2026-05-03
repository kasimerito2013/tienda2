@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Nuestro Catálogo de Productos</h1>
    <hr>

    <div class="row">
        @forelse($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $producto->nombre }}</strong></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $producto->marca }} | {{ $producto->categoria }}</h6>
                        <p class="card-text text-secondary">{{ $producto->descripcion }}</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h4 text-success mb-0">${{ number_format($producto->precio, 2) }}</span>
                            <span class="badge {{ $producto->stock > 0 ? 'bg-info' : 'bg-danger' }}">
                                {{ $producto->stock > 0 ? 'Disponible: '.$producto->stock : 'Agotado' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No hay productos disponibles en este momento.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection