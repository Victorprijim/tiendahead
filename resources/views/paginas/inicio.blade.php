@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <section class="portada">
        <div class="portada__texto">
            <h1>Tu café de cada mañana, a la vuelta de la esquina</h1>
            <p>
                En la Cafetería El Rincón llevamos años sirviendo desayunos a los vecinos del barrio.
                Somos un local pequeño, con seis mesas y una barra, donde casi todo el mundo se conoce
                por su nombre y donde el pan sale del horno antes de que abramos la persiana.
            </p>
            <p>
                Aquí puedes tomarte un café con calma, llevarte la hogaza para la comida o
                encargar un bizcocho para el cumpleaños del fin de semana.
            </p>
            <a href="{{ route('carta') }}" class="boton">Ver la carta</a>
        </div>
        <img src="{{ asset('img/local-cafeteria.jpg') }}" alt="Interior acogedor de una cafetería con mesas de madera" class="portada__imagen">
    </section>

    <section>
        <h2>Lo que más nos piden</h2>
        <div class="tarjetas">
            @foreach ($destacados as $destacado)
                <article class="tarjeta">
                    <img src="{{ asset($destacado['imagen']) }}" alt="{{ $destacado['alt'] }}">
                    <h3>{{ $destacado['titulo'] }}</h3>
                    <p>{{ $destacado['texto'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="bloque">
        <h2>¿Por qué venir al Rincón?</h2>
        <ul class="lista">
            <li>Hacemos el pan y la bollería en nuestro propio obrador, todos los días.</li>
            <li>Usamos leche fresca y aceite de oliva virgen extra en las tostadas.</li>
            <li>Tenemos opciones sin lactosa y bebidas vegetales sin coste extra.</li>
            <li>Preparamos pedidos para llevar si nos avisas el día anterior.</li>
        </ul>
        <p>
            Si te interesa saber más sobre lo que hay detrás de una buena taza o de una buena hogaza,
            te recomendamos leer sobre la historia del
            <a href="https://es.wikipedia.org/wiki/Caf%C3%A9" target="_blank" rel="noopener">café</a>
            y sobre la
            <a href="https://es.wikipedia.org/wiki/Masa_madre" target="_blank" rel="noopener">masa madre</a>
            en Wikipedia.
        </p>
    </section>
@endsection
