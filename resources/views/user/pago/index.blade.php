@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Realizar Pago</h1>

    <form action="{{ route('user.pago.store') }}" method="POST">
        @csrf
        <label for="metodo_pago">Método de Pago:</label>
        <select name="metodo_pago" id="metodo_pago" required>
            <option value="efectivo">Efectivo</option>
            <option value="tarjeta">Tarjeta</option>
            <option value="paypal">PayPal</option>
        </select>
        <button type="submit">Confirmar Pago</button>
    </form>
</div>
@endsection