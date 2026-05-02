@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>
    <div class="row">
        <nav>
        <a href="{{ route('user.productos') }}">Productos</a> |
        <a href="{{ route('user.perfil') }}">Perfil</a> |
        <a href="{{ route('user.pago') }}">Pago</a>
    </nav>

        @foreach($productos as $producto)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">{{ $producto->descripcion }}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection