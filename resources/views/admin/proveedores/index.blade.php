@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Gestión de Proveedores</h1>
        <nav>
            <a href="{{ route('admin.inventario') }}">Inventario</a> |
            <a href="{{ route('admin.productos') }}">Productos</a> |
            <a href="{{ route('admin.proveedores') }}">Proveedores</a> |
            <a href="{{ route('abastecimientos.index') }}">Abastecimientos</a> |
            <a href="{{ route('admin.recibos') }}">Recibos</a>
        </nav>
    </div>

    <hr>

    {{-- Botón para crear nuevo proveedor --}}
    <div class="mb-3">
        <a href="#" class="btn btn-primary"> + Agregar Proveedor</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre / Empresa</th>
                        <th>Contacto</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($proveedores as $prov)
                    <tr>
                        <td>{{ $prov->id }}</td>
                        <td><strong>{{ $prov->nombre_prov }}</strong></td>
                        <td>{{ $prov->contacto ?? 'N/A' }}</td>
                        <td>{{ $prov->telefono }}</td>
                        <td>{{ $prov->email }}</td>
                        <td>{{ $prov->direccion }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-sm btn-warning">Editar</a>
                                <button class="btn btn-sm btn-danger">Borrar</button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No hay proveedores registrados.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection