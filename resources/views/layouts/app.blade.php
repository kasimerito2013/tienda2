<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Laravel</title>
</head>
<body>
    <header>
        <h1>Mi Tienda</h1>
        <nav>
            <a href="{{ route('welcome') }}">Inicio</a> |
            <a href="{{ route('productos.index') }}">Productos</a>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 Mi Tienda</p>
    </footer>
</body>
</html>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif