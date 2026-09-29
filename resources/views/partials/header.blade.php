<header class="cabecera">
    <div class="contenedor cabecera__interior">
        <a href="{{ route('inicio') }}" class="logo">
            ☕ Cafetería <span>El Rincón</span>
        </a>
        <nav class="menu">
            <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'activo' : '' }}">Inicio</a>
            <a href="{{ route('carta') }}" class="{{ request()->routeIs('carta') ? 'activo' : '' }}">Carta</a>
            <a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'activo' : '' }}">Nosotros y contacto</a>
        </nav>
    </div>
</header>
