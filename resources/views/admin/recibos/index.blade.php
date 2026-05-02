@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Recibos con Detalles</h1>

    @foreach($recibos as $recibo)
        <div style="margin-bottom:20px; border:1px solid #ccc; padding:10px;">
            <p><strong>Recibo #{{ $recibo->id }}</strong></p>
            <p>Usuario: {{ $recibo->usuario->name ?? 'N/A' }}</p>
            <p>Fecha: {{ $recibo->fecha }}</p>
            <p>Total: {{ $recibo->total }}</p>

            <h4>Detalles:</h4>
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recibo->detalles as $detalle)
                        <tr>
                            <td>{{ $detalle->producto->nombre }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->precio_unitario }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>
@endsection