@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido a la Tienda</h1>

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" required autofocus>
        </div>
        <div>
            <label>Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>
@endsection