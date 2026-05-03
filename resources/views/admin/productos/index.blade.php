@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gestión de Productos</h2>
    <nav>
        <a href="{{ route('admin.inventario') }}">Inventario</a> |
        <a href="{{ route('admin.productos') }}">Productos</a> |
        <a href="{{ route('admin.proveedores') }}">Proveedores</a> |
        <a href="{{ route('abastecimientos.index') }}">Abastecimientos</a> |
        <a href="{{ route('admin.recibos') }}">Recibos</a>
    </nav>

    <hr> 
    <p>Aquí se administran los productos.</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Por si la tabla está vacía --}}
    @if($productos->isEmpty())
        <p>No hay productos registrados.</p>
    @endif
</div>
@endsection