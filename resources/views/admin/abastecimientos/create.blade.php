@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Abastecimiento de Mercancía</h2>
    <p>Complete los datos para ingresar stock al sistema.</p>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('abastecimientos.store') }}" method="POST" class="card p-4 shadow-sm">
                @csrf

                <div class="mb-3">
                    <label for="producto_id" class="form-label">Seleccionar Producto:</label>
                    <select name="producto_id" id="producto_id" class="form-select" required>
                        <option value="">-- Seleccione un producto --</option>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre }} ({{ $producto->marca }})</option>
                        @endforeach
                    </select>
                </div>

                <!-- Selección de Proveedor -->
                <div class="mb-3">
                    <label for="proveedor_id" class="form-label">Seleccionar Proveedor:</label>
                    <select name="proveedor_id" id="proveedor_id" class="form-select" required>
                        <option value="">-- Seleccione el proveedor --</option>
                        @foreach($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_prov }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <!-- Cantidad -->
                    <div class="col-md-6 mb-3">
                        <label for="cantidad" class="form-label">Cantidad Recibida:</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="precio_unitario" class="form-label">Precio Unitario de Compra:</label>
                        <input type="number" step="0.01" name="precio_unitario" id="precio_unitario" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="fecha_abastecimiento" class="form-label">Fecha de Ingreso:</label>
                    <input type="date" name="fecha_abastecimiento" id="fecha_abastecimiento" class="form-control" value="{{ date('Y-m-d') }}" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Guardar Ingreso</button>
                    <a href="{{ route('abastecimientos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection