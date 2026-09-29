<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cafetería El Rincón: café, pan y bollería casera en tu barrio.">
    <title>@yield('titulo') | Cafetería El Rincón</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    @include('partials.header')

    <main class="contenedor">
        @yield('contenido')
    </main>

    @include('partials.footer')
</body>
</html>
