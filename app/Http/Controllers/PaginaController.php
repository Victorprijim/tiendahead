<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PaginaController extends Controller
{
    /**
     * Página de inicio: presentación de la cafetería.
     */
    public function inicio(): View
    {
        $destacados = [
            [
                'titulo' => 'Pan del día',
                'texto' => 'Hogazas y barras que sacamos del horno cada mañana, con masa madre y fermentación lenta.',
                'imagen' => 'img/hogaza-pan.jpg',
                'alt' => 'Hogaza de pan recién horneada',
            ],
            [
                'titulo' => 'Bollería casera',
                'texto' => 'Cruasanes de mantequilla, napolitanas y magdalenas hechas aquí, sin prisas.',
                'imagen' => 'img/cruasanes.jpg',
                'alt' => 'Bandeja de cruasanes de mantequilla',
            ],
            [
                'titulo' => 'Café de siempre',
                'texto' => 'Café molido al momento para tu cortado, tu café con leche o tu solo de media mañana.',
                'imagen' => 'img/taza-cafe.jpg',
                'alt' => 'Taza de café solo sobre un plato',
            ],
        ];

        return view('paginas.inicio', compact('destacados'));
    }

    /**
     * Carta: productos agrupados por categoría con sus precios.
     */
    public function carta(): View
    {
        $categorias = [
            'Cafés e infusiones' => [
                ['nombre' => 'Café solo', 'descripcion' => 'Espresso corto e intenso.', 'precio' => 1.30],
                ['nombre' => 'Cortado', 'descripcion' => 'Café solo con un toque de leche.', 'precio' => 1.40],
                ['nombre' => 'Café con leche', 'descripcion' => 'El clásico del desayuno, en taza o en vaso.', 'precio' => 1.60],
                ['nombre' => 'Capuchino', 'descripcion' => 'Con espuma de leche y cacao espolvoreado.', 'precio' => 2.20],
                ['nombre' => 'Infusión', 'descripcion' => 'Manzanilla, poleo menta o té verde.', 'precio' => 1.50],
            ],
            'Bollería y dulces' => [
                ['nombre' => 'Cruasán de mantequilla', 'descripcion' => 'Hojaldrado y horneado cada mañana.', 'precio' => 1.50],
                ['nombre' => 'Napolitana de chocolate', 'descripcion' => 'Masa de hojaldre rellena de chocolate.', 'precio' => 1.70],
                ['nombre' => 'Magdalena casera', 'descripcion' => 'Receta de la abuela, con aceite de oliva.', 'precio' => 1.00],
                ['nombre' => 'Porción de bizcocho', 'descripcion' => 'De yogur y limón o de chocolate, según el día.', 'precio' => 2.00],
            ],
            'Panadería' => [
                ['nombre' => 'Barra tradicional', 'descripcion' => '250 g, corteza crujiente.', 'precio' => 1.10],
                ['nombre' => 'Hogaza de masa madre', 'descripcion' => '750 g, fermentación de 24 horas.', 'precio' => 3.80],
                ['nombre' => 'Pan integral de centeno', 'descripcion' => '500 g, con semillas.', 'precio' => 3.20],
            ],
            'Desayunos completos' => [
                ['nombre' => 'Desayuno Rincón', 'descripcion' => 'Café o infusión, zumo de naranja y tostada con tomate y aceite.', 'precio' => 4.20],
                ['nombre' => 'Desayuno dulce', 'descripcion' => 'Café o infusión y cruasán o napolitana a elegir.', 'precio' => 2.80],
            ],
        ];

        return view('paginas.carta', compact('categorias'));
    }

    /**
     * Sobre nosotros y contacto: historia, horario y datos de contacto.
     */
    public function contacto(): View
    {
        $horario = [
            'Lunes a viernes' => '7:30 – 20:00',
            'Sábados' => '8:30 – 14:00',
            'Domingos y festivos' => 'Cerrado',
        ];

        return view('paginas.contacto', compact('horario'));
    }
}
