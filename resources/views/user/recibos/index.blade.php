@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis Recibos de Compra</h1>
    <nav>
        <a href="{{ route('user.productos') }}">Productos</a> | 
        <a href="{{ route('user.perfil') }}">Perfil</a> |
        <a href="{{ route('user.pago') }}">Pago</a>
    </nav>
    <hr>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @forelse($recibos as $recibo)
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Recibo #{{ $recibo->id }}</strong> <br>
                            <small class="text-muted">Fecha: {{ $recibo->fecha }}</small>
                        </div>
                        <div class="text-end">
                            <span class="badge bg-primary">{{ $recibo->metodo_pago }}</span>
                            <p class="mb-0 h5">${{ number_format($recibo->total, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-light text-center">No tienes compras registradas.</div>
        @endforelse
    </div>
</div>
@endsection