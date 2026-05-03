@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Finalizar Pago</h1>
    <nav>
        <a href="{{ route('user.productos') }}">Productos</a> | 
        <a href="{{ route('user.perfil') }}">Perfil</a> | 
        <a href="{{ route('user.pago') }}">Pago</a>
    </nav>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <form action="{{ route('user.pago.store') }}" method="POST">
                    @csrf
                    <h4 class="mb-3">Resumen: $100.00</h4>
                    
                    <div class="mb-3">
                        <label for="metodo_pago" class="form-label">Seleccione Método de Pago:</label>
                        <select name="metodo_pago" id="metodo_pago" class="form-select" required>
                            <option value="">-- Seleccionar --</option>
                            <option value="Efectivo">Efectivo</option>
                            <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                            <option value="Transferencia">Transferencia</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100">Confirmar Pago</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection