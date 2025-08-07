<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Sobres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Sobre Coin Papel Ante 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Sobre CD Papel Blanco 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Ante 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Ante 105 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Sobres Bolsa Rondana Papel Ante105 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Blanco 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Blanco 105 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'Sobres Correspondencia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'Sobre Coranza Papel Ante 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'name' => 'Sobres Sociales',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'name' => 'Sobre Coin Papel Kraft 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Kraft 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Kraft 105 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 15,
                'name' => 'Sobres Bolsa Rondana Papel Kraft 105 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 16,
                'name' => 'Sobre Coin Papel Golden Kraft Economico 75 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 17,
                'name' => 'Sobres Bolsa Solapa Engomada Papel Golden Kraft Economico 75 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 18,
                'name' => 'Sobres Bolsa Rondana Papel Golden Kraft Economico 90 grs.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 19,
                'name' => 'Archivo Carton',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 20,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 21,
                'name' => 'Archivo Plástico',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 22,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 23,
                'name' => 'Folder',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 24,
                'name' => 'Carta Paquetes con 100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 25,
                'name' => 'Oficio Paquetes con 100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 26,
                'name' => 'Folders Colores Intensos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 27,
                'name' => 'Carta Paquetes con 25',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 28,
                'name' => 'Carta Paquetes con 100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 29,
                'name' => 'Oficio Paquetes con 25',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 30,
                'name' => 'Registradores',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 31,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 32,
                'name' => 'Formas Administrativas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 33,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 34,
                'name' => 'Formas Intercarbón',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 35,
                'name' => 'Tarjetas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 36,
                'name' => 'Carpetas Blancas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 37,
                'name' => 'Herraje en "O"',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 38,
                'name' => 'Herraje en "D"',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 39,
                'name' => 'Block Rotafolio',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 40,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 41,
                'name' => 'Escritura',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 42,
                'name' => 'Pilot',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 43,
                'name' => 'Sobres de Polipropileno',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 44,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 45,
                'name' => 'Despachadores de Agua',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 46,
                'name' => 'Hypermark / Royal',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 47,
                'name' => 'Papel Colores',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 48,
                'name' => 'Colores Neon Paquetes c/100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 49,
                'name' => 'Colores Pastel Paquetes c/100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 50,
                'name' => 'Colores Intensos Paquetes c/100',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 51,
                'name' => 'Opalinas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 52,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 53,
                'name' => 'Calculadoras',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 54,
                'name' => 'Royal',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 55,
                'name' => 'Rollos de Burbuja',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 56,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 57,
                'name' => 'Sobres de Burbuja',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 58,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 59,
                'name' => 'Folder Lux',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 60,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 61,
                'name' => 'Polipropileno',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 62,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 63,
                'name' => 'Indices',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 64,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 65,
                'name' => 'Carpetas Pressboard',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 66,
                'name' => 'Fortec',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 67,
                'name' => 'Carta Broche Paquetes con 10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 68,
                'name' => 'Oficio Broche Paquetes con 10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 69,
                'name' => 'Carta Palanca Paquetes con 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 70,
                'name' => 'Oficio Broche Paquetes con 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}