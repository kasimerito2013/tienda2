@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inventario</h1>

    <nav>
        <a href="{{ route('admin.inventario') }}">Inventario</a> |
        <a href="{{ route('admin.productos') }}">Productos</a> |
        <a href="{{ route('admin.proveedores') }}">Proveedores</a> |
        <a href="{{ route('abastecimientos.index') }}">Abastecimientos</a> |
        <a href="{{ route('admin.recibos') }}">Recibos</a>
    </nav>

    <hr>

    <!-- Aquí tu tabla de inventario -->
     <table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Disponible</th>
            <th>Reservada</th>
            <th>Vendida</th>
            <th>Ubicación</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inventarios as $inv)
            <tr>
                <td>{{ $inv->producto->nombre }}</td>
                <td>{{ $inv->cantidad_disponible }}</td>
                <td>{{ $inv->cantidad_reservada }}</td>
                <td>{{ $inv->cantidad_vendida }}</td>
                <td>{{ $inv->ubicacion }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection