@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Recibos con Detalles</h1>
        <nav>
            <a href="{{ route('admin.inventario') }}">Inventario</a> |
            <a href="{{ route('admin.productos') }}">Productos</a> |
            <a href="{{ route('admin.proveedores') }}">Proveedores</a> |
            <a href="{{ route('abastecimientos.index') }}">Abastecimientos</a> |
            <a href="{{ route('admin.recibos') }}">Recibos</a>
        </nav>
    </div>

    <hr>

    @if($recibos->isEmpty())
        <div class="alert alert-info">No hay recibos registrados en el sistema.</div>
    @else
        @foreach($recibos as $recibo)
            <div class="card mb-4 shadow-sm">
                <!-- Cabecera del Recibo -->
                <div class="card-header bg-primary text-white d-flex justify-content-between">
                    <span><strong>Recibo #{{ $recibo->id }}</strong></span>
                    <span><i class="far fa-calendar-alt"></i> Fecha: {{ $recibo->fecha }}</span>
                </div>
                
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Cajero/Usuario:</strong> {{ $recibo->usuario->name ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Método de Pago:</strong> {{ $recibo->metodo_pago ?? 'No especificado' }}</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h3 class="text-success">Total: ${{ number_format($recibo->total, 2) }}</h3>
                        </div>
                    </div>

                    <h5 class="border-bottom pb-2">Productos en esta venta:</h5>
                    <table class="table table-hover table-sm mt-2">
                        <thead class="table-light">
                            <tr>
                                <th>Producto</th>
                                <th class="text-center">Cantidad</th>
                                <th class="text-end">Precio Unitario</th>
                                <th class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recibo->detalles as $detalle)
                                <tr>
                                    <td>{{ $detalle->producto->nombre ?? 'Producto no encontrado' }}</td>
                                    <td class="text-center">{{ $detalle->cantidad }}</td>
                                    <td class="text-end">${{ number_format($detalle->precio_unitario, 2) }}</td>
                                    <td class="text-end">${{ number_format($detalle->cantidad * $detalle->precio_unitario, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection