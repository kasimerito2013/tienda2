@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Historial de Abastecimientos</h1>
        <a href="{{ route('abastecimientos.create') }}" class="btn btn-primary">
            + Registrar Nuevo Ingreso
        </a>
    </div>

    <nav class="mt-3">
        <a href="{{ route('admin.inventario') }}">Inventario</a> |
        <a href="{{ route('admin.productos') }}">Productos</a> |
        <a href="{{ route('admin.proveedores') }}">Proveedores</a> |
        <a href="{{ route('abastecimientos.index') }}">Abastecimientos</a>
        <a href="{{ route('admin.recibos') }}">Recibos</a>
    </nav>

    <hr>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Proveedor</th>
                <th>Cantidad</th>
                <th>Precio Unit.</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abastecimientos as $item)
            <tr>
                <td>{{ $item->id }}</td>
                {{-- Usamos las relaciones que definiste en el controlador con .with() --}}
                <td>{{ $item->producto->nombre ?? 'N/A' }}</td>
                <td>{{ $item->proveedor->nombre_prov ?? 'N/A' }}</td>
                <td>{{ $item->cantidad }}</td>
                <td>${{ number_format($item->precio_unitario, 2) }}</td>
                <td>{{ $item->fecha_abastecimiento }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection