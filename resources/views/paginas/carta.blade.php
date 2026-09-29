@extends('layouts.app')

@section('titulo', 'Carta')

@section('contenido')
    <h1>Nuestra carta</h1>
    <p class="intro">
        Precios con IVA incluido. La bollería y el pan se hornean cada mañana, así que a última hora
        de la tarde puede que alguna cosa se haya agotado. ¡Pregúntanos sin problema!
    </p>

    <div class="carta">
        <div class="carta__listas">
            @foreach ($categorias as $categoria => $productos)
                <section class="categoria">
                    <h2>{{ $categoria }}</h2>
                    <ul class="precios">
                        @foreach ($productos as $producto)
                            <li>
                                <div>
                                    <strong>{{ $producto['nombre'] }}</strong>
                                    <small>{{ $producto['descripcion'] }}</small>
                                </div>
                                <span class="precio">{{ number_format($producto['precio'], 2, ',', '.') }} €</span>
                            </li>
                        @endforeach
                    </ul>
                </section>
            @endforeach
        </div>

        <aside class="carta__lateral">
            <img src="{{ asset('img/desayuno.jpg') }}" alt="Cruasán acompañado de un café con leche">
            <h3>Consejo de la casa</h3>
            <p>
                Prueba el cruasán recién hecho con un café con leche: es el desayuno que más sale
                entre semana. Si quieres saber de dónde viene este bollo, en Wikipedia cuentan la
                <a href="https://es.wikipedia.org/wiki/Cruas%C3%A1n" target="_blank" rel="noopener">historia del cruasán</a>.
            </p>
            <h3>Alérgenos</h3>
            <p>
                Tenemos a tu disposición la información de alérgenos de cada producto. Puedes consultar
                más información sobre seguridad alimentaria en la web de la
                <a href="https://www.aesan.gob.es/" target="_blank" rel="noopener">Agencia Española de Seguridad Alimentaria y Nutrición (AESAN)</a>.
            </p>
        </aside>
    </div>
@endsection
