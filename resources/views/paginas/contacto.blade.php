@extends('layouts.app')

@section('titulo', 'Nosotros y contacto')

@section('contenido')
    <h1>Sobre nosotros</h1>

    <div class="dos-columnas">
        <section>
            <p>
                El Rincón empezó como una pequeña panadería familiar. Con el tiempo añadimos una
                cafetera, un par de mesas y, casi sin darnos cuenta, nos convertimos en el sitio donde
                los vecinos se paran a desayunar antes de ir a trabajar o después de dejar a los niños
                en el colegio.
            </p>
            <p>
                Hoy seguimos siendo un equipo pequeño: dos personas en el obrador desde las cinco de
                la mañana y otras dos atendiendo la barra. Nos gusta hacer las cosas bien y a mano,
                y que quien entra por la puerta se sienta como en casa.
            </p>

            <h2>Lo que nos importa</h2>
            <ul class="lista">
                <li>Trabajar con harinas de molinos cercanos.</li>
                <li>No tirar comida: el pan del día anterior se convierte en picatostes y torrijas.</li>
                <li>Un trato cercano y sin prisas.</li>
                <li>Precios razonables para el día a día.</li>
            </ul>
        </section>

        <aside class="caja">
            <h2>Horario</h2>
            <ul class="horario">
                @foreach ($horario as $dias => $horas)
                    <li><span>{{ $dias }}</span> <strong>{{ $horas }}</strong></li>
                @endforeach
            </ul>

            <h2>Contacto</h2>
            <ul class="lista">
                <li>Teléfono: 600 000 000</li>
                <li>Correo: <a href="mailto:hola@cafeteriaelrincon.example">hola@cafeteriaelrincon.example</a></li>
                <li>Encargos de tartas y bizcochos con 24 horas de antelación.</li>
            </ul>
        </aside>
    </div>

    <section class="bloque">
        <h2>¿Sabías que…?</h2>
        <p>
            El café con leche es, con diferencia, lo que más servimos. Si te pica la curiosidad,
            puedes leer sobre sus variantes en la página de
            <a href="https://es.wikipedia.org/wiki/Caf%C3%A9_con_leche" target="_blank" rel="noopener">café con leche de Wikipedia</a>
            o sobre los distintos tipos de
            <a href="https://es.wikipedia.org/wiki/Pan" target="_blank" rel="noopener">pan</a>
            que se elaboran en el mundo.
        </p>
    </section>
@endsection
