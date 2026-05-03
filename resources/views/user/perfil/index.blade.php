@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mi Perfil</h1>
    <nav>
        <a href="{{ route('user.productos') }}">Productos</a> | 
        <a href="{{ route('user.perfil') }}">Perfil</a> | 
        <a href="{{ route('user.pago') }}">Pago</a>
    </nav>
    <hr>

    <div class="card p-4 shadow-sm">
        <div class="row">
            <div class="col-md-2 text-center">
                <i class="fas fa-user-circle fa-5x text-secondary"></i>
            </div>
            <div class="col-md-10">
                <h3>{{ $usuario->name }}</h3>
                <p><strong>Correo:</strong> {{ $usuario->email }}</p>
                <p><strong>Fecha de registro:</strong> {{ $usuario->created_at->format('d/m/Y') }}</p>
                <a href="{{ route('user.recibos') }}" class="btn btn-info text-white">Ver mis compras</a>
            </div>
        </div>
    </div>
</div>
@endsection