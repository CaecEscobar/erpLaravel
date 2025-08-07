<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    public function run(): void
    {
DB::table('clients')->insert([
    [
        'id' => 2,
        'name' => 'PAPELERIA Y CONSUMIBLES DE MAZATLAN',
        'price_list_id' => '["97"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 3,
        'name' => 'DC MAYORISTA',
        'price_list_id' => '["12"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 4,
        'name' => 'Canadian Foreign Trade Promoter de México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 5,
        'name' => 'Concepción Pacheco García',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 7,
        'name' => 'UNION PAPELERA DE MEXICO',
        'price_list_id' => '["20"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 8,
        'name' => 'OFIMEX PAPELERA',
        'price_list_id' => '["18"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 9,
        'name' => 'Grupo Emavic S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 11,
        'name' => 'PROVEEDORA DE IMPRENTAS',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 12,
        'name' => 'Borrego Sánchez María Idelia',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 13,
        'name' => 'Empresas Nogu  S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 14,
        'name' => 'COMERCIOS UNIDOS',
        'price_list_id' => '["95"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 15,
        'name' => 'Papeleria Karthel S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 16,
        'name' => 'MARO PAPELERA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 17,
        'name' => 'Hernández Ramírez Inocencio',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 18,
        'name' => 'Jesús Ramírez Andrade',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 19,
        'name' => 'NEWBERRY Y COMPAÑIA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 21,
        'name' => 'Aguilar Reyna Laura',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 22,
        'name' => 'ALBERTO PEDROZA GONZALEZ',
        'price_list_id' => '["120"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 23,
        'name' => 'Papelería y Mercería Jalisco S.de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 24,
        'name' => 'Marisol Papelerías S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 25,
        'name' => 'Carmen Cuevas López',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 26,
        'name' => 'Delgado Hernández Alfonso',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 27,
        'name' => 'Alina Aguilar Tristan',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 28,
        'name' => 'Patricia Solano Chavez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 29,
        'name' => 'Hugo Javier Esquivel Gracida',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 30,
        'name' => 'Distribuidora Romher S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 31,
        'name' => 'Mauricio Flores Navarro',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 32,
        'name' => 'JAVIER DELGADO HERNANDEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 33,
        'name' => 'Grupo Covartig S. de R.L.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 34,
        'name' => 'Robledo Carrizales Mónica Juana Carolina',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 35,
        'name' => 'NAVARRO PAPELERA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 36,
        'name' => 'Jose Filemon Arias Merino',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 37,
        'name' => 'BRENDA ANNEL VIRGEN ARAIZA',
        'price_list_id' => '["120"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 38,
        'name' => 'Vallarín Díaz María De Lourdes',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 39,
        'name' => 'José Luis Sánchez Contreras',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 40,
        'name' => 'María Lourdes Retana Hernández',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 41,
        'name' => 'María De La Luz Barragán Contreras',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 42,
        'name' => 'ANGEL RESENDIZ MENDOZA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 43,
        'name' => 'Papeleria Paulin S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 44,
        'name' => 'Eva Nieto Garduño',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 45,
        'name' => 'Sigales Compañía Papelera S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 46,
        'name' => 'Consumibles y Papelería del Pacífico S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 47,
        'name' => 'De La Isla Serrano María Leonor',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 48,
        'name' => 'Salvador Reyes Luna',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 49,
        'name' => 'Paola Teresa Vázquez Lara',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 50,
        'name' => 'DU PAPIER DISTRIBUIDORA PAPELERA',
        'price_list_id' => '["13"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 51,
        'name' => 'PRONTO PAPER DISTRIBUIDORES',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 52,
        'name' => 'Excelencia Mexicana e Internacional S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 53,
        'name' => 'Nextcontact S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 54,
        'name' => 'Cadgrafics S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 55,
        'name' => 'Julio Peña García',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 56,
        'name' => 'Distribuidora Papelera de la Huasteca S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 57,
        'name' => 'Suministros de Computo y Telefonía S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 59,
        'name' => 'PAPELERA CANADA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 60,
        'name' => 'EL ALMACEN PAPELERIA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 61,
        'name' => 'Papelería y Computo Lier S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 62,
        'name' => 'GRUPO ABEBS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 63,
        'name' => 'Yolanda Gómez Ugarte',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 64,
        'name' => 'Evelyn Nava Rodríguez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 65,
        'name' => 'Operaciones Internacionales Elohim S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 66,
        'name' => 'Almacén Papelero S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 67,
        'name' => 'Alcantara Sánchez Vicente',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 68,
        'name' => 'Solis y Hernández Ma. De Lourdes Del Carmen',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 69,
        'name' => 'Laura Elena Navarro López',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 70,
        'name' => 'PAPELERIA Y CENTRO DE COPIADO HIDALGO',
        'price_list_id' => '["63,  64"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 71,
        'name' => 'Papelería y Distribuidora de Coahuila S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 72,
        'name' => 'Octavio Batta Gil',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 73,
        'name' => 'Matilde Mondragon Pretel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 74,
        'name' => 'Papelería Ofitel de Irapuato S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 75,
        'name' => 'CONSORCIO PAPELERO RIME',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 76,
        'name' => 'Juan Carlos Flores Navarro',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 77,
        'name' => 'Distribuidora Papelera Agoz S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 78,
        'name' => 'LA MARIPOSA DE LEON',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 79,
        'name' => 'Distribuidora Yussan S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 80,
        'name' => 'Verdi Santana José Fernando',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 81,
        'name' => 'León Nevarez Luis Manuel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 82,
        'name' => 'Patricia Ortíz Trejo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 83,
        'name' => 'Peletería y Papelería Luxor S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 84,
        'name' => 'Octavio Corral Villicaña',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 85,
        'name' => 'LEALGIL Y CIA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 86,
        'name' => 'LA ESCOLAR',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 87,
        'name' => 'Copimetro S.A. de C.V.',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 88,
        'name' => 'PAPELERIA 2001',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 89,
        'name' => 'Javier Ramírez Chavez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 90,
        'name' => 'PAQUIN',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 91,
        'name' => 'González Álvarez Martha Lizette',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 92,
        'name' => 'Comercial Colonial S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 93,
        'name' => 'CMC Distribuidora de Consumibles S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 94,
        'name' => 'Papelería San Cristobal de Puebla S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 95,
        'name' => 'PAPELERIA PERFUMERIA Y MERCERIA EL DELFIN',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 96,
        'name' => 'Elba Dolores Nuñez Torres',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 97,
        'name' => 'Cervantes Hipolito Luz Juan',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 98,
        'name' => 'Alzed Papelera S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 99,
        'name' => 'Papelería Charur S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 100,
        'name' => 'PAPELERIA ESCALA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 101,
        'name' => 'Rafael Barrientos Jasso',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 102,
        'name' => 'PAPELERA DE GUERRERO COPAGA',
        'price_list_id' => '["41"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 103,
        'name' => 'Representaciones Escolares y de Oficina ABC de S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 104,
        'name' => 'Gama Dufour Sergio',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 105,
        'name' => 'Papeleria Macdonald S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 106,
        'name' => 'Ofiexpress S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 107,
        'name' => 'CLARA MUÑOZ CISNEROS',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 108,
        'name' => 'PAPELERIA Y MERCERIA AMA',
        'price_list_id' => '["82,  83,  84,  85"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 109,
        'name' => 'Luis Humberto Flores Anguiano',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 110,
        'name' => 'Organización Papelera Tauro S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 111,
        'name' => 'Alfa Avila Carranza',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 112,
        'name' => 'Carmen Juárez Rodríguez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 113,
        'name' => 'Marissa Vergara Ramírez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 114,
        'name' => 'CENTRAL PAPELERA DE APIZACO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 115,
        'name' => 'Maya Gutierrez Javier',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 116,
        'name' => 'IDZAR COMERCIALIZADORA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 117,
        'name' => 'YAMEL GUADALUPE CEJA ARJONA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 118,
        'name' => 'GRUPO PAPELERAMA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 119,
        'name' => 'Comercial Papelera San Cristobal S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 120,
        'name' => 'José Antonio León Guzmán',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 121,
        'name' => 'Chavez Regalado María Guadalupe',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 122,
        'name' => 'Distribuciones Redal S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 123,
        'name' => 'Gabriel Isaac Acosta Castro',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 124,
        'name' => 'COLIBRI PAPELERIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 125,
        'name' => 'Rafael Sánchez Maqueo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 126,
        'name' => 'Gallo Rivero Ileana Genoveva',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 127,
        'name' => 'Claudia Leticia Perales Abrego',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 128,
        'name' => 'PAPELANDIA',
        'price_list_id' => '["102"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 129,
        'name' => 'Marco Antonio Figueroa Sanchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 130,
        'name' => 'PAPELERIA SALAMAN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 131,
        'name' => 'Tomatof S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 132,
        'name' => 'PAPELERA PRINCIPADO',
        'price_list_id' => '["56"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 133,
        'name' => 'Gracia Vera Ramírez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 134,
        'name' => 'PAPELERIA EL IRIS DE JALAPA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 135,
        'name' => 'Distribuidora Gudiño S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 136,
        'name' => 'JOSE FERNANDO GOMEZ LEYVA',
        'price_list_id' => '["39"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 137,
        'name' => 'Gabriel Hernández Garza',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 138,
        'name' => 'Rogelio Gómez Toledo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 139,
        'name' => 'Sucursal Papelera S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 140,
        'name' => 'Conrado Salazar López',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 141,
        'name' => 'Computadoras y Electrónica S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 142,
        'name' => 'Distribuidora del Real de Querétaro S. de R.L. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 143,
        'name' => 'Bolex S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 144,
        'name' => 'PAPELERIA MODERNA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 145,
        'name' => 'Escorcia Mayer Antonio',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 146,
        'name' => 'OFIMART DEL CENTRO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 147,
        'name' => 'DEX DEL NOROESTE',
        'price_list_id' => '["96"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 148,
        'name' => 'Olivia Crosswell Martínez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 149,
        'name' => 'Margarita Huerta Rodríguez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 150,
        'name' => 'María Del Carmen Genoveva Luna García',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 151,
        'name' => 'Comercializadora Damag S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 152,
        'name' => 'Armando Narno Rosete Rivera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 153,
        'name' => 'Maria Idalia Jaramillo Carrizales',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 154,
        'name' => 'Alma Castillo Romero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 155,
        'name' => 'ELISEO MORALES AVILA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 156,
        'name' => 'Dex Del Noroeste S.A. de C.V.',
        'price_list_id' => '["96"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 157,
        'name' => 'Plásticos y Metales Myc S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 158,
        'name' => 'María Luisa Mendiola Acosta',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 159,
        'name' => 'Elías Salvador Lugo Álvarez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 160,
        'name' => 'Ángel Héctor Martínez Valdez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 161,
        'name' => 'Papelería y Suministros Crioba S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 162,
        'name' => 'EL LAPIZ ROJO DE URUAPAN',
        'price_list_id' => '["74,  75,  76,  77"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 163,
        'name' => 'Almacén Rango S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 164,
        'name' => 'Rubén Pliego Andrade',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 165,
        'name' => 'Marco Antonio Ramayo Cervantes',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 166,
        'name' => 'COMERCIAL AMERICA DE ZAMORA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 167,
        'name' => 'Victor Hugo Silas Muñoz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 168,
        'name' => 'Joel Jiménez Sandoval',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 169,
        'name' => 'Ricardo Alberto Rojas Jímenez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 170,
        'name' => 'Guadalupe Beatríz Muñoz Muñoz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 171,
        'name' => 'Ricardo Manzano Cedeño',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 172,
        'name' => 'JESUS MANUEL BARBA GUERRERO',
        'price_list_id' => '["69"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 173,
        'name' => 'Distribuidora de Lácteos Algil S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 174,
        'name' => 'DISTRIBUIDORA MERCANTIL GUERRA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 175,
        'name' => 'María Teresa Oviedo Cordova',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 176,
        'name' => 'Servicios Compartidos de Alta Dirección S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 177,
        'name' => 'Carlos Sandoval García',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 178,
        'name' => 'Cristian Romero Romo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 179,
        'name' => 'Gerardo Jímenez Ricardez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 180,
        'name' => 'Alicia Garduño Juárez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 181,
        'name' => 'Mayorista en Papelería y Consumible S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 182,
        'name' => 'Cortés Barrientos Sagrario',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 183,
        'name' => 'Los Alpes Distribuidora y Servicios Comerciales S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 184,
        'name' => 'Zarate Torres Marlene',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 185,
        'name' => 'PAPELERA HEGOR',
        'price_list_id' => '["62"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 186,
        'name' => 'Patricia Bernal Pérez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 187,
        'name' => 'PROVEEDORA DE OFICINAS Y DESPACHOS',
        'price_list_id' => '["19"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 188,
        'name' => 'Roberto Arellano Sandoval',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 189,
        'name' => 'Espinoza Barragán Ricardo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 190,
        'name' => 'Comercializadora Famyem S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 191,
        'name' => 'Enrique Alberto Godinez Cano',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 192,
        'name' => 'Distribuidora Atenea S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 193,
        'name' => 'Conde Serrano Margarita',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 194,
        'name' => 'MA. DE LOURDES AGUILERA ESCOBAR',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 195,
        'name' => 'Industrias Herna S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 196,
        'name' => 'María Angélica Cervantes Miranda',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 197,
        'name' => 'José Antonio Vázquez Villegas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 198,
        'name' => 'Adriana Beatríz Tejeda Álvarez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 199,
        'name' => 'Isamar Hérnandez Gómez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 200,
        'name' => 'DIRECCION SPORT',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 201,
        'name' => 'Jose Sades Kaspi',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 202,
        'name' => 'DISTRIBUIDORA DE ARTICULOS DE ESCRITORIO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 203,
        'name' => 'Nueva Papelera Unión S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 204,
        'name' => 'Estratégia Interamericana de Comercio S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 205,
        'name' => 'Gomez Lara Norma Angélica',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 206,
        'name' => 'Juana Bertha García De Jesús',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 207,
        'name' => 'Distribuidora Vigar S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 208,
        'name' => 'MAYORISTAS EN PAPELERIA, EQUIPO DE OFICINA Y COMPUTO',
        'price_list_id' => '["120"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 209,
        'name' => 'Carreón Ortíz Miguel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 210,
        'name' => 'Edgar Mauricio Mendoza Mayoral',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 211,
        'name' => 'Salvador Nieto Vega',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 212,
        'name' => 'María Isabel García Ruy Sánchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 213,
        'name' => 'Electrónica COM S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 214,
        'name' => 'JOSE MARTIN TORRES SERRANO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 215,
        'name' => 'Dagaz Industrial y Tecnológica S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 216,
        'name' => 'Elba Janet Montes Martínez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 217,
        'name' => 'JORGE LUIS PAZ MANZO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 218,
        'name' => 'Amador Arenas Zenil',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 219,
        'name' => 'María Arias Gómez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 220,
        'name' => 'Raúl Herrera Cornejo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 221,
        'name' => 'Henco Global S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 222,
        'name' => 'Proveedores Mayoristas de Papelería S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 223,
        'name' => 'Lyzandro Francisco Herrera Hernández',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 224,
        'name' => 'Maribel Aguirre Arellano',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 225,
        'name' => 'Humberto Marmolejo Esqueda',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 226,
        'name' => 'Publitop S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 227,
        'name' => 'Make Pro S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 228,
        'name' => 'Cie Servicios Profesionales S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 229,
        'name' => 'OFILLEVA',
        'price_list_id' => '["101"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 230,
        'name' => 'Integraclean S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 231,
        'name' => 'Sergio Alonso Carrillo Castillo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 232,
        'name' => 'Javier Sepulveda Amed',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 233,
        'name' => 'Comerdekk Comercializadora Dekkor S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 234,
        'name' => 'Papelería Progreso S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 235,
        'name' => 'SAUL LUNA ORTEGA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 236,
        'name' => 'Comercial Papelera México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 237,
        'name' => 'María De Lourdes Anell Guzmán',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 238,
        'name' => 'Office Mate S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 239,
        'name' => 'Sandra Pérez Cuevas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 240,
        'name' => 'Grupo Comercial Rossher S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 241,
        'name' => 'Luis Manuel Rosas Torres',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 242,
        'name' => 'DISTRIBUIDORA MARIN',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 243,
        'name' => 'Central Papelera Tulancingo S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 244,
        'name' => 'Mayra Gomez Aldana',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 245,
        'name' => 'Grupo Papelero Mac S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 246,
        'name' => 'Mac Toner Audio y Video S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 247,
        'name' => 'Pablo Jesús Mejía Velázquez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 248,
        'name' => 'Sergio Sánchez Jímenez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 249,
        'name' => 'Raymundo Adolfo Rodríguez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 250,
        'name' => 'JAVIER REYES BAUTISTA',
        'price_list_id' => '["53"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 251,
        'name' => 'Vega Díaz Jaime Manuel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 252,
        'name' => 'Grupo Papelero de Oaxaca S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 253,
        'name' => 'Erik Edgardo Ibarra Perea',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 254,
        'name' => 'PAPELERIA DEL ISTMO PACIFICO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 255,
        'name' => 'Papelería M.V., S.A. de C.V.',
        'price_list_id' => '["113"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 256,
        'name' => 'Zarate Cortés Manuel Ramiro',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 257,
        'name' => 'Sergio Sánchez Cutz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 258,
        'name' => 'Ruzma Papelería y Computo S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 259,
        'name' => 'Macias Paez Monica',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 260,
        'name' => 'Braulio Camacho Villegas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 261,
        'name' => 'PAPELERIA LA EXPOSICION',
        'price_list_id' => '["43"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 262,
        'name' => 'Libenz México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 263,
        'name' => 'CITLALLI MEZA CARDENAS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 264,
        'name' => 'Grupo Gaoma S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 265,
        'name' => 'Imprenta y Papelería Soto S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 266,
        'name' => 'Esther Hernández Higuera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 267,
        'name' => 'Norma Luz Cortés Galindo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 268,
        'name' => 'BLANCA MIRLA BAUTISTA CALDERON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 269,
        'name' => 'AB CENTRAL PAPELERA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 270,
        'name' => 'Gloría Martha Molina Olvera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 271,
        'name' => 'Yolanda Ortíz Aguirre',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 272,
        'name' => 'Santos Rodríguez Vite',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 273,
        'name' => 'PAPELERIA PENSIL',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 274,
        'name' => 'Didactipapelera S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 275,
        'name' => 'Francisco Guillermo Rueda Reyes',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 276,
        'name' => 'Librería y Papelería León de Mazatlán S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 277,
        'name' => 'Ivette Chirinos Barrán',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 278,
        'name' => 'Azpeitia Sucesores S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 279,
        'name' => 'Guido De La Cruz María Elena',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 280,
        'name' => 'María Esther López Padilla',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 281,
        'name' => 'Servicios Integrales para Computación y Oficinas S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 282,
        'name' => 'Valdés González Clara Juana',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 283,
        'name' => 'COMERCIAL PAPELERA LA GRAN BE',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 284,
        'name' => 'CORSA SOLUCIONES',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 285,
        'name' => 'Proveedora Ofifair S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 286,
        'name' => 'Administradora Lux S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 287,
        'name' => 'Papelería Minerva S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 288,
        'name' => 'WILCON INGENIERIA Y DIBUJO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 289,
        'name' => 'Mercería y Papelería Olivo S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 290,
        'name' => 'Jaime Gelis Vila',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 291,
        'name' => 'Candelaria Salas Curiel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 292,
        'name' => 'Grupo Industrial de Coatzacoalcos S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 293,
        'name' => 'José Alberto Ávila Rivas',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 294,
        'name' => 'LA ESFERA DEL CENTRO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 295,
        'name' => 'Martínez Barajas Octavio',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 296,
        'name' => 'Ruíz Velasco María De La Soledad',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 297,
        'name' => 'Edmonds International S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 298,
        'name' => 'ARACELI ALEJANDRA CUADRA CAZARES',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 299,
        'name' => 'Pedro Antonio Moyeda Beltrán',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 300,
        'name' => 'Vazquez Vazquez Beatriz Adriana',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 301,
        'name' => 'Juan Carlos Coyotl Roldan',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 302,
        'name' => 'MARIO ALBERTO RIVERA MARTINEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 303,
        'name' => 'Papelería Consumibles y Accesorios S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 304,
        'name' => 'David Mendóza Guadarrama',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 305,
        'name' => 'GRUPO LEBA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 306,
        'name' => 'Rocío De La Soledad González Reyes',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 307,
        'name' => 'Proveedora Metropolitana S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 308,
        'name' => 'Silvia Leticia Larre Arrieta',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 309,
        'name' => 'Pademex, S. de R. L. de C. V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 310,
        'name' => 'MA. CARMEN MARTINEZ RODRIGUEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 311,
        'name' => 'Juguete Juguetón S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 312,
        'name' => 'Comercializadora Gómez  S. de R.L. M.I.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 313,
        'name' => 'Ana Martina Martínez Placencia',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 314,
        'name' => 'María Del Carmen Rodríguez Rodríguez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 315,
        'name' => 'Ferrepape de Jalisco S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 316,
        'name' => 'Ibañez Saldaña Karen Marcela',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 317,
        'name' => 'Sandra García García',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 318,
        'name' => 'Novedades Togu S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 319,
        'name' => 'MARIA DE LOURDES MARIN RAMIREZ',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 320,
        'name' => 'Maribel Julian Catalán',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 321,
        'name' => 'Proveedora de Materiales Romm S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 322,
        'name' => 'Grupo Vicanpe de Oaxaca S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 323,
        'name' => 'Grupo Pap y Con S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 324,
        'name' => 'ALVA PAPELERIA',
        'price_list_id' => '["111"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 325,
        'name' => 'ABASTECEDOR CORPORATIVO',
        'price_list_id' => '["58"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 326,
        'name' => 'Papelería Génova S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 327,
        'name' => 'Badillo Pallares Susana Angélica',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 328,
        'name' => 'Sulamita S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 329,
        'name' => 'Columba De La Cruz Quintero',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 330,
        'name' => 'Osuna Dulcerías S.A. de C.V.',
        'price_list_id' => '["89"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 331,
        'name' => 'PAPELERA GOBA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 332,
        'name' => 'Para Portafolio de Servicios Digitales S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 333,
        'name' => 'Papelería Turín S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 334,
        'name' => 'Anabel Pedroza Sánchez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 335,
        'name' => 'María Inés Nevarez Chávez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 336,
        'name' => 'María Del Rocío Espinosa Hernández',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 337,
        'name' => 'Irma Jardines Camacho',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 338,
        'name' => 'German Sánchez Loaiza',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 339,
        'name' => 'PISO PAPELES NACIONALES',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 340,
        'name' => 'Pco Papelerías S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 341,
        'name' => 'Grupo Xarty S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 342,
        'name' => 'Navarro Caro Daniel Victorio',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 343,
        'name' => 'Natalia Carlota Flores Izacupe',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 344,
        'name' => 'ELIZABETH MACIAS FLORES',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 345,
        'name' => 'Takahata Segawa Óscar Tetsuya',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 346,
        'name' => 'CATALINA DAMIAN SANTAMARIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 347,
        'name' => 'Foyo Hermanos S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 348,
        'name' => 'Eliseo Hernández González',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 349,
        'name' => 'Rogelio Daniel Acosta Montiel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 350,
        'name' => 'Gustavo Reynoso Martínez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 351,
        'name' => 'Universidad Autónoma del Estado de Baja California',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 352,
        'name' => 'RENE GERARDO GARZA LOPEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 353,
        'name' => 'Miramontes Espinoza Gilberto de Jesús',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 354,
        'name' => 'Humberto Pérez Álvarez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 355,
        'name' => 'Patricia Cordova Domínguez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 356,
        'name' => 'Proveedora de Productos y Servicios de T. I  S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 357,
        'name' => 'Ruben Darío Carrasco Armenta',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 358,
        'name' => 'Beatríz Miranda Miranda',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 359,
        'name' => 'Diana Sujey Gómez Lara',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 361,
        'name' => 'América Antonieta Cervantes Chuzeville',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 362,
        'name' => 'Jazmín Sarmiento Hernández',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 363,
        'name' => 'CESAR OSVALDO BARBA GUERRERO',
        'price_list_id' => '["69"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 364,
        'name' => 'Abastecedora de Oficinas de Guadalajara S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 365,
        'name' => 'Producciones Conti S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 366,
        'name' => 'Rodrigo García García',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 367,
        'name' => 'Laura Marisela Macias Arellanos',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 368,
        'name' => 'Papelería y Mercería El Olivo S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 369,
        'name' => 'DML Educar S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 370,
        'name' => 'Ramiro Alberto Galván Chapa',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 371,
        'name' => 'ALFONSO TINOCO SOSA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 372,
        'name' => 'Belruy S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 373,
        'name' => 'JESUS MANUEL BARBA CUEVAS',
        'price_list_id' => '["69"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 374,
        'name' => 'Hermilo Quintero Gaxiola',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 375,
        'name' => 'Velázquez Sánchez Odilon',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 376,
        'name' => 'María Edith Gutierrez Salazar',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 377,
        'name' => 'Administraciones Santillan y Asociados S.C.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 378,
        'name' => 'Juan Macias Tovar',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 379,
        'name' => 'Fendis S.A. de C.V.',
        'price_list_id' => '["2 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 380,
        'name' => 'Martha Esther Roman Estabanez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 381,
        'name' => 'Jorge Arturo Carmona Reyes',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 382,
        'name' => 'María Elena Neme David',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 383,
        'name' => 'Alejandra Pérez Barba',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 384,
        'name' => 'Guillermo Eduardo Galván Tamayo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 385,
        'name' => 'Quijas Valdes Victor Hugo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 386,
        'name' => 'Aldo Mauricio Chiapas Jacome',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 387,
        'name' => 'ROCIO ARACELI ELIZONDO BALDERAS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 388,
        'name' => 'Rosa Elba Felix Troche',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 389,
        'name' => 'SILVIA SUSANA VELOZ NUÑEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 390,
        'name' => 'Faccuseh Dabdoub Gerardo Antonio',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 391,
        'name' => 'El Nuevo Modelo S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 392,
        'name' => 'ARTURO GAMA DUFOUR',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 393,
        'name' => 'Rodrigo Manzo Foyo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 394,
        'name' => 'JOSE MANUEL EUDAVE RAMOS',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 395,
        'name' => 'Zaragoza Ledezma Gloria',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 396,
        'name' => 'Roberto Bernardino Santamaría Ramírez',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 397,
        'name' => 'César Arturo Bautista Arroyo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 398,
        'name' => 'OFFISOL',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 399,
        'name' => 'Lucila Emiliana Peña Montor',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 400,
        'name' => 'Procuraduría General De La República',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 401,
        'name' => 'Distribuidora Dusa del Norte S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 402,
        'name' => 'PAPELERIA Y TLAPALERIA EL AGUILAR',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 403,
        'name' => 'Silvano Rosas Benitez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 404,
        'name' => 'ESPACIO MATERIAL',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 405,
        'name' => 'Jacqueline Susana Cordero Garcia',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 406,
        'name' => 'Chiquito Chiquito Delfino',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 407,
        'name' => 'Hizoffice S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 408,
        'name' => 'Antonio Garcia Becerra',
        'price_list_id' => '["120"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 409,
        'name' => 'Molina Luna Margarito',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 410,
        'name' => 'Sedypa Imagen & Markas S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 411,
        'name' => 'Consorcio Papelero Jags S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 412,
        'name' => 'Carolina Rivera Díaz',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 413,
        'name' => 'Magui García Morales',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 414,
        'name' => 'Emilia María De Lourdes Tejedo Martínez',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 415,
        'name' => 'ANTONIO MARTINEZ MURILLO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 416,
        'name' => 'Compupapeleria del Sureste S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 417,
        'name' => 'OFICENTRO PAPELERIA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 418,
        'name' => 'Comercializadora Papelera de Occidente S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 419,
        'name' => 'Oscar Gerardo García Cervantes',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 420,
        'name' => 'Richard Cardiel Camargo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 421,
        'name' => 'DUSA PAPELERA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 422,
        'name' => 'Servicios Corporativos Amacuzac F. C.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 423,
        'name' => 'Consultoría Empresarial Edal S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 424,
        'name' => 'Ideas Para Educar S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 425,
        'name' => 'Ivan Rodolfo Balandrano Hernández',
        'price_list_id' => '["126"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 426,
        'name' => 'Silvia Catalina Roque Posada',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 427,
        'name' => 'DISTRIBUIDORES Y FABRICANTES DE ARTICULOS ESCOLARES Y DE OFICINA',
        'price_list_id' => '["25"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 428,
        'name' => 'Operaciones del Norte S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 429,
        'name' => 'Ana María Zamora Reyes',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 430,
        'name' => 'María de Lourdes Zamora',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 431,
        'name' => 'Compuredes de Los Mochis S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 432,
        'name' => 'REMIGIO LOPEZ BONILLA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 433,
        'name' => 'Jesús Aurelio Flores Silva',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 434,
        'name' => 'Jose Ortiz Martinez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 435,
        'name' => 'LA ESTRELLA DIVISION PAPELERIA',
        'price_list_id' => '["57"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 436,
        'name' => 'PAPELERIAS ROMERO ROCHA',
        'price_list_id' => '["41"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 437,
        'name' => 'Papelería Nueva Epoca S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 438,
        'name' => 'Librería y Papelería Cárdenas S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 439,
        'name' => 'Araceli Deyanira Merino Gallegos',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 440,
        'name' => 'Copimex S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 441,
        'name' => 'María Karla Roman Estrada',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 442,
        'name' => 'REY EDUARDO ZAMBRANO HERNANDEZ',
        'price_list_id' => '["41"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 443,
        'name' => 'REY ZAMBRANO QUEZADA',
        'price_list_id' => '["41"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 444,
        'name' => 'Fernando Jesús Melendez Cortés',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 445,
        'name' => 'Eléctrica Herrera S.A. de C.V.',
        'price_list_id' => '["46"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 446,
        'name' => 'ELUVIA RODRIGUEZ BRITO',
        'price_list_id' => '["48"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 447,
        'name' => 'Rosa Carmina Felix Rojo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 448,
        'name' => 'SIGIFREDO CASTRO ANGULO',
        'price_list_id' => '["109"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 449,
        'name' => 'Distribuidor Papelero de Toluca S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 450,
        'name' => 'Papelería Cuauhtémoc de Toluca S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 451,
        'name' => 'LUIS ARTURO DEL REAL MONTEMAYOR',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 452,
        'name' => 'Marco Pablo Damián Santamaría',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 453,
        'name' => 'Luis Alberto Luna Trejo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 454,
        'name' => 'Olga Lidia López Romero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 455,
        'name' => 'MARTHA GUADALUPE CRUZ SANCHEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 456,
        'name' => 'Papelería Campos de Poza Rica S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 457,
        'name' => 'Comercializadora Jaheta S.A. de C.V.',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 458,
        'name' => 'Blasomar S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 459,
        'name' => 'Liliana Matílde Morales Avila',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 460,
        'name' => 'TLAQUEPAQUE ESCOLAR',
        'price_list_id' => '["117"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 461,
        'name' => 'MAPEQ MAYORISTAS EN PAPELERIA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 462,
        'name' => 'DAVID ESPINOZA BARRAGAN',
        'price_list_id' => '["92"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 463,
        'name' => 'Gabriel Segoviano Rios',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 464,
        'name' => 'Martha Patricia Vázquez May',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 465,
        'name' => 'COMERCIAL PAPELERA DE VICTORIA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 466,
        'name' => 'Papelería Marlo S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 467,
        'name' => 'PAPELERIA DEL SUR',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 468,
        'name' => 'Vicente Moreno Guerrero',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 469,
        'name' => 'Corporación Papelera BS de Sonora S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 470,
        'name' => 'Romo Anaya Ma. De La Luz',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 471,
        'name' => 'Center Business Of Copy Digital S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 472,
        'name' => 'Benjamín Martínez Ramírez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 473,
        'name' => 'Proveedora Grafica de Los Mochis S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 474,
        'name' => 'Guadalupe Anduaga Franco',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 475,
        'name' => 'Papelera del Noroeste S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 476,
        'name' => 'Julio Cesar Melendrez Gamez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 477,
        'name' => 'Omocha S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 478,
        'name' => 'Grupo Papelero Emporio S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 479,
        'name' => 'Nohe Adame Castillo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 480,
        'name' => 'Grupo Industrial Covo S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 481,
        'name' => 'Luis Alberto Muñoz Barba',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 482,
        'name' => 'Abel Rodríguez Aguayo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 483,
        'name' => 'Abel Itxaso Cipriano Larranaga Austín',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 484,
        'name' => 'Alarmas Garmont S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 485,
        'name' => 'Comercial Empresarial Urano S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 486,
        'name' => 'VICTOR UGO CRUZ MOTA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 487,
        'name' => 'Papelera de Guamuchil S.A.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 488,
        'name' => 'Manuel Alejandro Pérez Macias',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 489,
        'name' => 'JOSE RICARDO NISHIMURA TORRES',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 490,
        'name' => 'Lina Lorena Vázquez Jiménez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 491,
        'name' => 'MARIA GUADALUPE RAMOS HERNANDEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 492,
        'name' => 'PAPELERA DABO',
        'price_list_id' => '["28"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 493,
        'name' => 'Antonio Galvez Salgado',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 494,
        'name' => 'Surtidora de Oficinas y Escolar S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 495,
        'name' => 'PAPIERWAREN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 496,
        'name' => 'Distribuidora de Avios Xim S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 497,
        'name' => 'JAVIER BARBA GUERRERO',
        'price_list_id' => '["69"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 498,
        'name' => 'Fletes Manzanillo S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 499,
        'name' => 'Israel Plata Ávila',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 500,
        'name' => 'Normando Saenz Holguin',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 501,
        'name' => 'Comercial Roshfrans, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 502,
        'name' => 'PAPELERIA NOFER',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 503,
        'name' => 'José Alfredo Torres Hernández',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 504,
        'name' => 'Lux Populi S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 505,
        'name' => 'Timoteo Castro Fernández',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 506,
        'name' => 'Ediciones Elmire S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 507,
        'name' => 'La Merceria de Noe S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 508,
        'name' => 'Jose Angel Islas Contreras',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 509,
        'name' => 'PAPELERA VELSA DE MEXICO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 510,
        'name' => 'PAPELERIA LAREDO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 511,
        'name' => 'Gilberto Pérez Arellano',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 512,
        'name' => 'Computación y Papelería Alzaru S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 513,
        'name' => 'Susana Alicia Ramírez Tress',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 514,
        'name' => 'María Del Pilar Tress Petrilli',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 515,
        'name' => 'Guadalupe Irma Rodríguez Ruiz',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 516,
        'name' => 'Aqua Médica S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 517,
        'name' => 'LA BODEGUITA DE LOS SUEÑOS',
        'price_list_id' => '["61"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 518,
        'name' => 'Cesar Molina Calderon',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 519,
        'name' => 'ESCORPIO SUMINISTROS DE OFICINA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 520,
        'name' => 'YGNACIA CANDELARIA MARTINEZ URBINA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 521,
        'name' => 'Josefina Funes Villatoro',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 522,
        'name' => 'Grupo Papelero Bety S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 523,
        'name' => 'ALAN PUENTE AMPARAN',
        'price_list_id' => '["88"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 524,
        'name' => 'JENNIFER VIVIANA RAMIREZ RAMON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 525,
        'name' => 'ECOPAPEL DE COMITAN',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 526,
        'name' => 'Comercializadora de Suministros Industriales, Comerciales y de Oficinas Provexia S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 527,
        'name' => 'Harmon Hall Operadora A.C.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 528,
        'name' => 'Papelería Farah S. de R.L.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 529,
        'name' => 'Juana Leonarda Martínez Pech',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 530,
        'name' => 'Raquel Tamariz Hererra',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 531,
        'name' => 'Grupo Afcomunicaciones S.A.de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 532,
        'name' => 'PAPELERIA Y CONSUMIBLES MARDI',
        'price_list_id' => '["45"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 533,
        'name' => 'Alex David Melendez Usquiano',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 534,
        'name' => 'ZAPOPAN ESCOLAR',
        'price_list_id' => '["117"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 535,
        'name' => 'Distribuidora Clips De Comitan S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 536,
        'name' => 'Jose Antonio Gonzalez Pliego',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 537,
        'name' => 'Cesar Cruz Montiel',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 538,
        'name' => 'Gloria Solano Melo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 539,
        'name' => 'Patricia Maria Maldonado Tirado',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 540,
        'name' => 'ABASTECEDORA DE OFICINAS',
        'price_list_id' => '["10"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 541,
        'name' => 'VICTOR MANUEL DIAZ BARRANCO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 542,
        'name' => 'Angeles Carmen Martinez Jarquin',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 543,
        'name' => 'Comercializadora Milenio S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 544,
        'name' => 'Efren Lopez Lopez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 545,
        'name' => 'Simona Barba González',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 546,
        'name' => 'Sertel Distribuidora S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 547,
        'name' => 'Organización Papelera Del Centro S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 548,
        'name' => 'Grupo Papelero Ruíz S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 549,
        'name' => 'ARTURO VALDES PEREZ',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 550,
        'name' => 'Inmobiliaria Herku S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 551,
        'name' => 'Erika Paola Schinnerl Sánchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 552,
        'name' => 'CIRO SALVADOR REA MORALES',
        'price_list_id' => '["48"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 553,
        'name' => 'Katia Estefanía Ibañez Saldaña',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 554,
        'name' => 'Corporativo GM Papelerías de Comitan S. de R.L. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 555,
        'name' => 'COMERCIAL TUKSONORA',
        'price_list_id' => '["93"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 556,
        'name' => 'CASA KIMOTO',
        'price_list_id' => '["86"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 557,
        'name' => 'Industrias Alimenticias Fabp S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 558,
        'name' => 'CASA DE PAPELERIA M',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 559,
        'name' => 'Papelería Cancun S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 560,
        'name' => 'Patricia Roque Montes',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 561,
        'name' => 'MA. DE LOURDES QUIJAS VALDES',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 562,
        'name' => 'Sandro García Loaiza',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 563,
        'name' => 'Prosem, Servicios de Comercio Exterior S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 564,
        'name' => 'ALADINO DE LOS MOCHIS',
        'price_list_id' => '["91"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 565,
        'name' => 'Alfer Del Centro S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 566,
        'name' => 'Operadora de Tiendas Voluntarias S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 567,
        'name' => 'Alicia Muñoz González',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 568,
        'name' => 'Gonvauto Puebla S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 569,
        'name' => 'Office Club S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 570,
        'name' => 'Comercializadora de Equipos y Suplementos Industriales CESI, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 571,
        'name' => 'Marisela Guadalupe De Jesús Martínez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 572,
        'name' => 'JOSE ANTONIO RETIF BUENFIL',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 573,
        'name' => 'Comercializadora Elimo S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 574,
        'name' => 'Leonardo Ruíz Alcantara',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 575,
        'name' => 'Vidaurreta Electrónica E Importación S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 576,
        'name' => 'José Luis Almaguer Agustín',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 577,
        'name' => 'Franco Hernández Francisco Manuel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 578,
        'name' => 'Margarita Vázquez Mariscal',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 579,
        'name' => 'Ávila Torres Arturo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 580,
        'name' => 'Daniel Barcenas Ramírez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 581,
        'name' => 'Recursos de Formación S. C.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 582,
        'name' => 'Gimsa Construcciones Integrales del Golfo S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 583,
        'name' => 'Jazmin Gorety Sánchez Tellez',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 584,
        'name' => 'Rafaela Magloria Rosas y Torres',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 585,
        'name' => 'Luis Enrique Loaiza Escobar',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 586,
        'name' => 'Tratamiento Interamericano de Agua S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 587,
        'name' => 'Gabriel Sánchez Gómez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 588,
        'name' => 'Cipriano Molina Ramírez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 589,
        'name' => 'Papers S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 590,
        'name' => 'JOSE LUIS SANTANA GARCIA',
        'price_list_id' => '["47"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 591,
        'name' => 'RUBEN DARIO CUEVAS OCAMPO',
        'price_list_id' => '["39"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 592,
        'name' => 'Consorcio Papelero El Búho S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 593,
        'name' => 'Isla Hernández Raúl',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 594,
        'name' => 'Bonilla López Vanessa',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 595,
        'name' => 'Carlos Daniel Michaca Pineda',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 597,
        'name' => 'Grupo Papelero De Quintana Roo S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 598,
        'name' => 'Kamigi S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 599,
        'name' => 'Diaz Trejo Hector',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 600,
        'name' => 'Alejandra Mejia Hernandez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 601,
        'name' => 'Ma. de los Angeles Lopez Robledo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 602,
        'name' => 'Ofimedia Papeleria y Consumibles S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 603,
        'name' => 'Claudia Patricia Camiro Torreblanca',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 604,
        'name' => 'JORGE CRUZ BARRERA',
        'price_list_id' => '["23"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 605,
        'name' => 'Diego Rodriguez Santoyo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 606,
        'name' => 'Mostrador',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 607,
        'name' => 'PROVEEDORA EL GUARDIAN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 608,
        'name' => 'EBENEZER PAPELERA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 609,
        'name' => 'Papelerama del Noroeste S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 610,
        'name' => 'Papeleria Madero Valladolid S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 611,
        'name' => 'Apland Supply S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 612,
        'name' => 'SCH PAPELERIA Y COMERCIALIZADORA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 613,
        'name' => 'PAPELERIA Y LIBRERIA PATRIA DE MONTERREY',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 614,
        'name' => 'PAPELERIA Y LIBRERIA CENTRAL DE MONTERREY',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 615,
        'name' => 'Botica Guadalupe de Parral S.A.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 616,
        'name' => 'Barbara Allison Santana Garcia',
        'price_list_id' => '["47"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 617,
        'name' => 'Carlos Antonio Hernandez Nogueda',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 618,
        'name' => 'Hernandes Del Holmo Enrique',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 619,
        'name' => 'Distribuidora Dade S.A de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 620,
        'name' => 'Carlos Augusto Mendoza Herrera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 621,
        'name' => 'SERGIO LARA PEREZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 622,
        'name' => 'Francisco Erice Beltran',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 623,
        'name' => 'Sol Osiris Camacho Sanchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 624,
        'name' => 'Edgar Perez Dominguez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 625,
        'name' => 'Maria Isabel Villegas Gonzalez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 626,
        'name' => 'Profesionistas Asociados S.C.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 627,
        'name' => 'Gerardo Leal y Cia, S. de R.L. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 628,
        'name' => 'Enue Campos Herrera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 629,
        'name' => 'Ibarra Reyes Francisco Jesus',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 630,
        'name' => 'Distribuidora Multiservicios Office S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 631,
        'name' => 'Francisco Pita Mendosa',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 632,
        'name' => 'Leandra Martinez Baez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 633,
        'name' => 'Cindy del Carmen Blanquet Rueda',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 634,
        'name' => 'Edith Zurita Campos',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 635,
        'name' => 'Miguel Angel Reza Flores',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 636,
        'name' => 'Perla Morales Montufar',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 637,
        'name' => 'Ramon Pacheco Moreno',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 638,
        'name' => 'Diamantex S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 639,
        'name' => 'Huizar Ávila María del Pilar',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 640,
        'name' => 'Margarita Jovita Lopez Pachuca',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 641,
        'name' => 'LUIS PEREZ SANTIAGO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 642,
        'name' => 'Erick Josue Islas',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 643,
        'name' => 'Gildardo López Flores',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 644,
        'name' => 'Jose Ramirez Lopez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 645,
        'name' => 'Jose Gerardo Marchand Lopez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 646,
        'name' => 'Emma Ceballos Cobian',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 647,
        'name' => 'Coriba & Cornejo S. de R.L. de C.V.',
        'price_list_id' => '["117"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 648,
        'name' => 'ABASTECEDORA OLINKA',
        'price_list_id' => '["46"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 649,
        'name' => 'Regina Beatriz Santana Garcia',
        'price_list_id' => '["47"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 650,
        'name' => 'La Escolar de Puebla S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 651,
        'name' => 'Baltazar Mena Rosa Ma.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 652,
        'name' => 'Papelería Alvarez de Zacatán',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 653,
        'name' => 'Almacenadora Sur, S.A. de C.V. Organizacion Auxiliar del Credito',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 654,
        'name' => 'Oscar',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 655,
        'name' => 'Salvador',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 656,
        'name' => 'Jorge Estrada Alamo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 657,
        'name' => 'Centro Papelero Haru S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 658,
        'name' => 'Luis Emilio Damian Santamaria',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 659,
        'name' => 'GRACIELA CARDENAS COTA',
        'price_list_id' => '["94"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 660,
        'name' => 'Maribel Rodriguez Carrillo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 661,
        'name' => 'OFFICENTER DE FRONTERA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 662,
        'name' => 'Martha Patricia Jimenez Quijas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 663,
        'name' => 'Dora Matilde Benitez Gonzalez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 664,
        'name' => 'Universidad Motolinia AC',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 665,
        'name' => 'Lorena Rudorff Ortega',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 666,
        'name' => 'Comercializadora Escorpion LM S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 667,
        'name' => 'Sistemas Organizados del Noroeste S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 668,
        'name' => 'Garcia Vega Minelva Virginia',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 669,
        'name' => 'KARLA NATALIA GONZALEZ CALLE',
        'price_list_id' => '["26"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 670,
        'name' => 'Sanchez Nava Ignacia',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 671,
        'name' => 'Angel Solis Rivera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 672,
        'name' => 'Francisco Portillo Garcia',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 673,
        'name' => 'Kneos Tecnologia de Colaboracion Empresarial S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 674,
        'name' => 'Casa Cuervo México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 675,
        'name' => 'Secretaria de Educacion Publica',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 676,
        'name' => 'Maria Antonia Caballero Ramirez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 677,
        'name' => 'Antonia Rodriguez Lozano',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 678,
        'name' => 'Maria Teresa Ramirez Lopez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 679,
        'name' => 'LA REYNA DE MESONES',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 680,
        'name' => 'Gabriel Gomez Samperio',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 681,
        'name' => 'YOLANDA UGARTE JACOME',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 682,
        'name' => 'Colome Gas Gabriel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 683,
        'name' => 'Yannet Carrera Paque',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 684,
        'name' => 'Ibarra Reyes Francisco Jesus',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 685,
        'name' => 'Idalid Santillana',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 686,
        'name' => 'CONCEPCION ROCIO HERRERA CHAVARRIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 687,
        'name' => 'Judith Jimenez Quijas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 688,
        'name' => 'Javier Medina Pineda',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 689,
        'name' => 'DAVID ANTONIO PAREDES LUNA',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 690,
        'name' => 'Estrategias Comerciales Buxom S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 691,
        'name' => 'Ma. De La Soledad Luna Alarcon',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 692,
        'name' => 'Hiram Winston Rosas Del Angel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 693,
        'name' => 'Papeleria y Merceria Guerra S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 694,
        'name' => 'Araceli Barranco Cruz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 695,
        'name' => 'Botica y Papeleria Londres del Lago S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 696,
        'name' => 'Papeleria Hirr',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 697,
        'name' => 'Ana Maria Hernandez Moreno',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 698,
        'name' => 'Andres Isaac Velasco Torres',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 699,
        'name' => 'Julio Rafael Ruiz Romero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 700,
        'name' => 'LEON ERVIN LOPEZ LOPEZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 701,
        'name' => 'Muñoz Campos S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 703,
        'name' => 'Banco Nacional del Ejercito, Fuerza Aerea y Armada, S.N.C.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 704,
        'name' => 'JAVIER HERNANDEZ FLORES',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 705,
        'name' => 'Jesus',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 706,
        'name' => 'MERLIN PAOLA LOPEZ VAZQUEZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 707,
        'name' => 'Israel Diaz',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 708,
        'name' => 'Papeleria y Comercializadora del Centro Lichtle S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 709,
        'name' => 'OPM PAPELERIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 710,
        'name' => 'Proveedora de Papeleria Catalunya S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 711,
        'name' => 'Papeleria Novedades',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 712,
        'name' => 'COMERCIALIZADORA Y DISTRIBUIDORA BACHILLER',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 713,
        'name' => 'Distribuidora Papelera Nupon S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 714,
        'name' => 'Roberto Ramos Vilchis',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 715,
        'name' => 'Papeleria y Libreria Hidalgo S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 716,
        'name' => 'MARIA EMILIA GUILLEN REYNA',
        'price_list_id' => '["32"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 717,
        'name' => 'PAPELERIA ELIZABETH',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 718,
        'name' => 'Marmego y Compañia S.A de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 719,
        'name' => 'Industrias Automotrices R.C. S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 720,
        'name' => 'Grupo Internacional Machines S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 721,
        'name' => 'Natural Ivgedahe S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 722,
        'name' => 'Juan Antonio Enciso Escalante',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 723,
        'name' => 'Ferrecabsa S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 724,
        'name' => 'PROVEEDORA DE PAPELERIAS Y OFICINAS TORRES ATC',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 725,
        'name' => 'Enrique Mauricio Aragon Hernandez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 726,
        'name' => 'Soluciones Electroneumaticas Integradas de México S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 727,
        'name' => 'Eugenia Adriana Altamirano Pereda',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 728,
        'name' => 'Ferretodo México S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 729,
        'name' => 'MARIO ORDAZ LEON',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 730,
        'name' => 'Comercializadora Corona S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 731,
        'name' => 'Surtidora de Papelerias Kym S.A. de C.V.',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 732,
        'name' => 'JOSE ANGEL GUSTAVO MONDRAGON ORDAZ',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 733,
        'name' => 'Lygar S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 734,
        'name' => 'Comercializadora Lari S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 735,
        'name' => 'Luis García Luna',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 736,
        'name' => 'Luz Angelica Gonzalez Rodriguez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 737,
        'name' => 'Distribuciones Adiante S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 738,
        'name' => 'Olga Lidia Maldonado Moreno',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 739,
        'name' => 'JOSE DE JESUS RAMOS VILLAFAÑA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 740,
        'name' => 'Distribuidora de Productos a Bajo Precio S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 741,
        'name' => 'Miguel Angel Felix Palmero',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 742,
        'name' => 'Multiservicios Industriales Isla del Carmen S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 743,
        'name' => 'Juan Gerardo Cervantes Mendez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 744,
        'name' => 'Francisco Juan Pablo Becerra Alcacio',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 745,
        'name' => 'Jose Antonio Diaz De Leon',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 746,
        'name' => 'Polanco Hermanos S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 747,
        'name' => 'Mariel Andrea Barrera Martin',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 748,
        'name' => 'Arturo Aranda Gutierrez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 749,
        'name' => 'Joel Duarte Ramirez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 750,
        'name' => 'Lorena Portales Gonzalez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 751,
        'name' => 'Monica Jazmin Lopez Medrano',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 752,
        'name' => 'Martha Alicia Martinez Araujo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 753,
        'name' => 'Andres Camacho Martinez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 754,
        'name' => 'Sergood Internacional S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 755,
        'name' => 'Price Services & Trade, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 756,
        'name' => 'Misión México Excelencia S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 757,
        'name' => 'Inversora EY S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 758,
        'name' => 'Glenda Magali Garcia Calero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 759,
        'name' => 'Comergolf S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 760,
        'name' => 'Sergio Lozada Galavis',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 761,
        'name' => 'Marcelo Rafael Castilla Carrillo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 762,
        'name' => 'Roldan Garcia Lopez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 763,
        'name' => 'Jorge Lopez Lopez',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 764,
        'name' => 'Aldeno S.P.R. de R.L. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 765,
        'name' => 'Comercial Arco Iris S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 766,
        'name' => 'Jose Antonio Medina Gutierrez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 767,
        'name' => 'Proveedora Para Industria de Matamoros S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 768,
        'name' => 'Modas Selectas Del Noroccidente, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 769,
        'name' => 'OIE High Solution de México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 770,
        'name' => 'Elizabeth Miriam Orozco Cuahonte',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 771,
        'name' => 'COMERCIAL STARK',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 772,
        'name' => 'Papeleria La Palma De Aguascalientes S.A. de C,V,',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 773,
        'name' => 'RAMIRO LORENZO MENDOZA AGUILA',
        'price_list_id' => '["112"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 774,
        'name' => 'Victor Hugo Muñoz Barba',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 775,
        'name' => 'Antonio Ceja Maron',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 776,
        'name' => 'Servicios de Ingenieria en Medicina S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 777,
        'name' => 'Modas Selectas de Puebla, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 778,
        'name' => 'Modas Selectas del Sureste, S.A. de C,V,',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 779,
        'name' => 'Consumibles de Computacion Nacionales e Importados S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 780,
        'name' => 'Analisis de Riesgos Comerciales S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 781,
        'name' => 'Universidad Autónoma de Nuevo León',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 782,
        'name' => 'MARIA ALEJANDRA GALLEGOS DE SANTIAGO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 783,
        'name' => 'Modas Selectas de Leon S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 784,
        'name' => 'Miguel Angel Lopez Castro',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 785,
        'name' => 'Papeleria Rouhana, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 786,
        'name' => 'Martha Rocio Ortiz De Anda',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 787,
        'name' => 'Carlos Enrique Diaz De Leon',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 788,
        'name' => 'COFI GRUPO PAPELERO',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 789,
        'name' => 'Worldworks México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 790,
        'name' => 'Ganix Garay Lluch',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 791,
        'name' => 'BERNARDO BAUTISTA CALDERON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 792,
        'name' => 'Emma Flores Hernandez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 793,
        'name' => 'Ricardo Hidalgo Ramirez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 794,
        'name' => 'Papeleria Alameda S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 795,
        'name' => 'Comercializadora Alus S.A. de C,V',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 796,
        'name' => 'Miguel Apolonio Mejia Velazquez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 797,
        'name' => 'Jaime Avalos',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 798,
        'name' => 'Luis Fernando Pérez Guzmán',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 799,
        'name' => 'Ricardo Villalobos Pacheco',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 800,
        'name' => 'Distegra S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 801,
        'name' => 'Josefina Avalos Cervantes',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 802,
        'name' => 'LIBRERIA PATRIA DE MONCLOVA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 803,
        'name' => 'ARQLINE',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 804,
        'name' => 'Sergio David Nava Perez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 805,
        'name' => 'Tecnologia Avanzada SGL S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 806,
        'name' => 'Papeleria Geminis',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 807,
        'name' => 'Beatriz Adriana Garcia Torres',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 808,
        'name' => 'Susana Avila Méndez',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 809,
        'name' => 'PAPELERIA MARON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 810,
        'name' => 'Compañia de Servicios Ostar S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 811,
        'name' => 'PAPELERIA EL BUEN ESTUDIANTE',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 812,
        'name' => 'Rosa Isela Serrano Ruelas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 813,
        'name' => 'Hector Mitre Lopez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 814,
        'name' => 'Martha Angelica Gamboa Vazquez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 815,
        'name' => 'Centro Electronico Del Valle de Mexico S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 816,
        'name' => 'Daniela Gutierrez Rangel',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 817,
        'name' => 'JM Refacciones Industriales, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 818,
        'name' => 'Genaro Gonzalez Vega',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 819,
        'name' => 'José Arturo Rodríguez Acosta',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 820,
        'name' => 'PCO Services, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 821,
        'name' => 'papeleria',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 822,
        'name' => 'Atecorp De México S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 823,
        'name' => 'Logy Remon Import S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 824,
        'name' => 'LAURA ELENA MARTINEZ MURILLO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 825,
        'name' => 'Allgrim, S.C.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 826,
        'name' => 'Comadiv S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 827,
        'name' => 'Reluhc S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 828,
        'name' => 'DUMGAR',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 829,
        'name' => 'Martín Rodolfo Dominguez Ortiz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 830,
        'name' => 'DISTRIBUIDORA CHARUR',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 831,
        'name' => 'Enlace Empresarial Quiro S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 832,
        'name' => 'GRAMARI COMERCIALIZADORA',
        'price_list_id' => '["16"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 833,
        'name' => 'ADELA BLANCAS GONZALEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 834,
        'name' => 'Corporacion 88 Rio de la Loza S.A de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 835,
        'name' => 'CICOVISA',
        'price_list_id' => '["11"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 836,
        'name' => 'MD SUMINISTROS TECNICOS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 837,
        'name' => 'Compañia Universal Papelera, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 838,
        'name' => 'Papeleria Copi-Playa S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 839,
        'name' => 'OFICENTRAL PAPELERA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 840,
        'name' => 'Papelera Alpahe S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 841,
        'name' => 'Marco Antonio Damian Adan',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 842,
        'name' => 'Edgar Alberto Estevez Cruz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 843,
        'name' => 'ADRIANA ARENAS OLIVERAS',
        'price_list_id' => '["87"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 844,
        'name' => 'Ngit Films S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 845,
        'name' => 'MARTIN RODRIGUEZ GRANADOS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 846,
        'name' => 'Distribuidores de Papeleria Rott S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 847,
        'name' => 'Gilberto Esquivel Cab',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 848,
        'name' => 'MICROVISA M.G.',
        'price_list_id' => '["42"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 849,
        'name' => 'Muestras',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 850,
        'name' => 'Ma. De Lourdes Alvarez Hernandez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 851,
        'name' => 'FERNANDO ROSALIO FLORES GARRIDO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 852,
        'name' => 'Jonathan Adalid Sánchez Monterosa',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 853,
        'name' => 'ROGAS',
        'price_list_id' => '["108"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 854,
        'name' => 'Jesus Alberto Madrid Tirado',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 855,
        'name' => 'Garcia Garcia Adriana Remedios',
        'price_list_id' => '["2"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 856,
        'name' => 'Fernando Guadalupe Robles Trejo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 857,
        'name' => 'PAPELERIA ALVAREZ DE ZACATLAN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 858,
        'name' => 'Manuel Alejandro Roman Lima',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 859,
        'name' => 'PROVEEDORA ESCOLAR Y DE OFICINA DE NUEVO LEON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 860,
        'name' => 'José Elías Pool Pech',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 861,
        'name' => 'María Gracia Aurora Dominguez Romero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 862,
        'name' => 'Josué Rojas Espinoza',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 863,
        'name' => 'Arttek S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 864,
        'name' => 'Papelería y Artículos de Oficina México, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 865,
        'name' => 'Amada Cano Osorio',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 866,
        'name' => 'Martín Mendoza Lagunas',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 867,
        'name' => 'FORMAS EFICIENTES',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 868,
        'name' => 'Bodegas California, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 869,
        'name' => 'GRUPO REYES PAPELERIA LIBRERIA Y MUCHO MAS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 870,
        'name' => 'JUAN CARLOS VEGA RUIZ',
        'price_list_id' => '["98"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 871,
        'name' => 'Suministros Empresariales NSI, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 872,
        'name' => 'BONIFACIO ESCALONA PEREZ',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 873,
        'name' => 'Comercializadora Computel Del Sureste S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 874,
        'name' => 'Jose Edgardo Solis Palma',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 875,
        'name' => 'EL NORTE PAPELERIA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 876,
        'name' => 'Copycanon S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 877,
        'name' => 'PAPELERIA DANY',
        'price_list_id' => '["103"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 878,
        'name' => 'Distribuidora Papelera del Centro, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 879,
        'name' => 'LO QUE NECESITAS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 880,
        'name' => 'CORPORATIVO PAPELERO DEL SUR ESTRELLA',
        'price_list_id' => '["57"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 881,
        'name' => 'LA ESTRELLA DIVISION PAPELERIA ZARAGOZA',
        'price_list_id' => '["57"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 882,
        'name' => 'FERMIN SOLIS FLORES',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 883,
        'name' => 'COMERCIALIZADORA SURTIDORA ESCOLAR',
        'price_list_id' => '["90"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 884,
        'name' => 'Jose Luis Abarca Rodríguez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 885,
        'name' => 'Suministros Asesoría y Comercio, S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 886,
        'name' => 'Grupo Enisja S.A. de C.V.',
        'price_list_id' => '["127"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 887,
        'name' => 'CASA MARYS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 888,
        'name' => 'DISTRIBUIDORA DE MARCAS DEL CARIBE',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 889,
        'name' => 'Papelerias Colibri, S. de R.L. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 890,
        'name' => 'JOSE GABRIEL SEGOVIANO ROMERO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 891,
        'name' => 'Centro Papelero Sun Rise, S.A. de C.V.',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 892,
        'name' => 'Guillermo Arturo Ortiz Aguilar',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 893,
        'name' => 'Juan Rafael Gonzalez Maldonado',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 894,
        'name' => 'Productos Dietrix, S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 895,
        'name' => 'GRUPO TRES PENINSULAR',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 896,
        'name' => 'Corporativo Papelero Ance, S de RL de CV',
        'price_list_id' => '["117"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 897,
        'name' => 'PAPELERIA EL ANCLA',
        'price_list_id' => '["33"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 898,
        'name' => 'Comercializadora Papelera de Occidente, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 899,
        'name' => 'GUARNERO SUMINISTROS PARA OFICINA',
        'price_list_id' => '["52"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 900,
        'name' => 'Veronica Guerrero Calva',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 901,
        'name' => 'Jose Juan Gutierrez Tapia',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 902,
        'name' => 'Papeleria Angelopolitana, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 903,
        'name' => 'Maria Fernanda Velazquez Cigarrero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 904,
        'name' => 'PAPELERIA Y VARIOS',
        'price_list_id' => '["105"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 905,
        'name' => 'Comput-arte Papeleria, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 906,
        'name' => 'Gonzalez Byass de Mexico, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 907,
        'name' => 'Monica Akachi Hiramuro',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 908,
        'name' => 'Papeleria Profesional, S.A de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 909,
        'name' => 'Carlota Torres Lomeli',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 910,
        'name' => 'Sandra Milena Bates Flores',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 911,
        'name' => 'NELLY NOVOA CAMACHO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 912,
        'name' => 'RENATA CANUDAS PATIÑO',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 913,
        'name' => 'RAQUEL GALLEGOS RODRIGUEZ',
        'price_list_id' => '["106"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 914,
        'name' => 'Viridiana Martinez Cabrera',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 915,
        'name' => 'DANIEL RUIZ GUIDO',
        'price_list_id' => '["33"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 916,
        'name' => 'Negib Ahmed Ganem Diaz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 917,
        'name' => 'Java Office Supplies de Mexico, S de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 918,
        'name' => 'JORGE ALBERTO ISLAS VELARDE',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 919,
        'name' => 'RAUL EDUARDO OCHOA CARRASCO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 920,
        'name' => 'Luis Angel Lopez Monreal',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 921,
        'name' => 'Infinity Papeleria, S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 922,
        'name' => 'VICTOR MANUEL OCHOA CARRASCO',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 923,
        'name' => 'MONSERRAT REYNOSO FERNANDEZ',
        'price_list_id' => '["78,  79,  80,  81"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 924,
        'name' => 'Bertha Alvarez Telles',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 925,
        'name' => 'Multiservicios Equipos y Materiales del Centro, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 926,
        'name' => 'MIGUEL ANGEL GARDUÑO ROMAN',
        'price_list_id' => '["41"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 927,
        'name' => 'JOSE OFION CANUDAS ISHIKAWA',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 928,
        'name' => 'DIZA SOLUCIONES DE OFICINA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 929,
        'name' => 'BALANDRANO INK',
        'price_list_id' => '["59"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 930,
        'name' => 'EDUARDO NIETO RUIZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 931,
        'name' => 'Berenice Minjares Lopez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 932,
        'name' => 'SERGIO TREVIÑO VEGA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 933,
        'name' => 'SURTIDORA PECO',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 934,
        'name' => 'Distribuidoras de Papelerias Gama, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 935,
        'name' => 'CENTRO PAPELERO MARVA',
        'price_list_id' => '["21"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 936,
        'name' => 'DELTA TIGER',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 937,
        'name' => 'GENNY ROCIO DEL ROSARIO CERON MENDOZA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 938,
        'name' => 'BEATRIZ GARCIA MORALES',
        'price_list_id' => '["29,  30,  31"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 939,
        'name' => 'LUIS ANTONIO SANTILLAN CANO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 940,
        'name' => 'Grupo Joss Mayorista, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 941,
        'name' => 'SERGIO MARTIN LOPEZ GARCIA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 942,
        'name' => 'Marsol Distribuidora, S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 943,
        'name' => 'Envases y Empaques del Pacifico SA de CV',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 944,
        'name' => 'ALMACEN PAPELERO SALDAÑA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 945,
        'name' => 'Surtipap, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 946,
        'name' => 'ND Accesorios Tula S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 947,
        'name' => 'Verónica Velasco Soria',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 948,
        'name' => 'COMERCIAL TOACHE',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 949,
        'name' => 'JUAN GABRIEL LOYA TORRES',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 950,
        'name' => 'Gastelum IX, S.A. de C.V.',
        'price_list_id' => '["128"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 951,
        'name' => 'PAPELERIA LOS AMATES',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 952,
        'name' => 'Juan Jose Hernandez Enciso',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 953,
        'name' => 'Manuel Rivas Amezcua',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 954,
        'name' => 'AMADO MONROY CASTILLO',
        'price_list_id' => '["125"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 955,
        'name' => 'OPERADORA OMX',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 956,
        'name' => 'Juan Carlos Carbajal Romero',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 957,
        'name' => 'Jose Manuel Tamayo Ortiz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 958,
        'name' => 'Alfredo Romero Martinez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 959,
        'name' => 'PAPELERIA ESPA&OLA DE MATAMOROS',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 960,
        'name' => 'Oscar Lopez Solano',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 961,
        'name' => 'CARLOS FRANCISCO MORALES MARTINEZ',
        'price_list_id' => '["41"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 962,
        'name' => 'JUAN MANUEL BARBOSA LOPEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 963,
        'name' => 'COMERCIALIZADORA CIPAC',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 964,
        'name' => 'LIBRERIA JUAREZ DE VALLES',
        'price_list_id' => '["70,  71,  72,  73"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 965,
        'name' => 'Equipos Villela y Copyjet, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 966,
        'name' => 'Carmen de los Angeles Lerma Calvillo',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 967,
        'name' => 'Clips Mart, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 968,
        'name' => 'Roberto Lem Gonzalez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 969,
        'name' => 'MARIA CECILIA ALCOCER BUHL',
        'price_list_id' => '["6"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 970,
        'name' => 'Sibalog, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 971,
        'name' => 'Juan Camarena Espinosa',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 972,
        'name' => 'Maria Antonieta Diaz Barber',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 973,
        'name' => 'Color Sand Papers S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 974,
        'name' => 'Super Dulceria Laryn, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 975,
        'name' => 'PAPELERIA SARACHO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 976,
        'name' => 'Prime Traders, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 977,
        'name' => 'ADOLFO RAMIREZ FUNCKE',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 978,
        'name' => 'LA ESCOLAR DE TEXCOCO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 979,
        'name' => 'El Nuevo Japon de México, S.A. de C.V.',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 980,
        'name' => 'Distribuidora Proesa, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 981,
        'name' => 'ANA CELIA CARDENAS MARTINEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 982,
        'name' => 'Teresa de Jesus Martinez de la Cruz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 983,
        'name' => 'Maria Antonieta Ordoñez Ortiz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 984,
        'name' => 'Javier Sanchez Sanchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 985,
        'name' => 'Comercializadora e Innovaciones Esto y Mas, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 986,
        'name' => 'Armando Arambula Chavez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 987,
        'name' => 'OSWALDO GARIBALDY GOMEZ CARNALLA',
        'price_list_id' => '["39"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 988,
        'name' => 'FELIX NEVAREZ ARREDONDO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 989,
        'name' => 'Meliton Silvestre Ramirez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 990,
        'name' => 'Solis Vargas Monserrat Sinai',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 991,
        'name' => 'Soluciones Avanzadas de Suministros y Servicios, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 992,
        'name' => 'Ocelotl Salazar Victor',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 993,
        'name' => 'Giovanna Codemo Juarez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 994,
        'name' => 'Laura Rebeca Amador Manzo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 995,
        'name' => 'Distribuidora MTS, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 996,
        'name' => 'Dismapa, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 997,
        'name' => 'JUANA ELIZABETH PEDROZA MARTINEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 998,
        'name' => 'Rosa Isela Ibarra Caldera',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 999,
        'name' => 'Luis Eduardo Nahle Pascual',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1001,
        'name' => 'Luz Maria Moreno Montaño',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1002,
        'name' => 'MAYRA DE LA PURISIMA MARTINEZ BRIONES',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1003,
        'name' => 'PAPELERIA RUY SANCHEZ',
        'price_list_id' => '["104"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1004,
        'name' => 'Carlos Alberto Lugo Wong',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1005,
        'name' => 'Eduardo Rodriguez Cruz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1006,
        'name' => 'Distribuidora Papelera Mercantil S.A.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1007,
        'name' => 'Alpe de Baja California S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1008,
        'name' => 'Estambres Papel o Tijera, S. de R.L. de C.V.',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1009,
        'name' => 'EG Papeleria, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1010,
        'name' => 'MARIA ISABEL VILLEGAS GONZALEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1011,
        'name' => 'Evely Lucelly Hernandez Cano',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1012,
        'name' => 'Felipe Cisneros Zevada',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1013,
        'name' => 'PAPELERIA LOZANO HERMANOS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1014,
        'name' => 'Miguel Angel Rendon Torres',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1015,
        'name' => 'PAPELERIA Y MERCERIA LA CANICA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1016,
        'name' => 'Laurencia Luna Moreno',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1017,
        'name' => 'Elvia Araceli Sanchez Carrillo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1018,
        'name' => 'Orlando Perez Alamilla',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1019,
        'name' => 'GRHAM',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1020,
        'name' => 'Ernesto Alvarado Correa',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1021,
        'name' => 'Salvador Lara de la Torre',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1022,
        'name' => 'DISTRIBUIDORA LIVERPOOL',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1023,
        'name' => 'Fundacion Dibujando un Mañana, A.C.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1024,
        'name' => 'COMERCIAL GARZA REYNA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1025,
        'name' => 'Arturo Juarez Ramon',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1026,
        'name' => 'Maria Elizabeth Sandoval Rios',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1027,
        'name' => 'Tiendas Gran D, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1028,
        'name' => 'ABC Papelerias y Servicios, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1029,
        'name' => 'Diana Cristina Paez Flores',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1030,
        'name' => 'Proveedora Papelera, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1031,
        'name' => 'Ana Silvia Nuñez Rivas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1032,
        'name' => 'Papeleria El Cisne de Zamora, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1033,
        'name' => 'ABASTECEDORA LUMEN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1034,
        'name' => 'MARISOL BUSTAMANTE GARCIA',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1035,
        'name' => 'Andres Garcia Martinez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1036,
        'name' => 'JUAN GUILLERMO VILLA SANCHEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1037,
        'name' => 'Papelería y Librería Latina, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1038,
        'name' => 'Compañia Papelera del Nazas, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1039,
        'name' => 'Impresos y Papeleria Ocaña, S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1040,
        'name' => 'Diana Claudia Barba Rosas',
        'price_list_id' => '["2 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1041,
        'name' => 'Distribuidora Gardi, S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1042,
        'name' => 'Librerias Gandhi, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1043,
        'name' => 'Proveedora Escolar, S. de R.L.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1044,
        'name' => 'Proveedora de Oficinas La Esfera de Puebla, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1045,
        'name' => 'Papelera Azteca de Mexicali, S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1046,
        'name' => 'PAPELERA ANZURES',
        'price_list_id' => '["124"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1047,
        'name' => 'MARIO CABALLERO GARCIA',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1048,
        'name' => 'Salvador Rodarte Martinez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1049,
        'name' => 'XCD Operativo, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1050,
        'name' => 'XCD Servicios, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1051,
        'name' => 'Nancy Berenice Contreras Castellanos',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1052,
        'name' => 'Daniel Mendoza Irigoyen',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1053,
        'name' => 'Dipalmex, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1054,
        'name' => 'E Print, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1055,
        'name' => 'MONICA LIZETH ORDAZ CORONA',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1056,
        'name' => 'Distribuidora Grafica Universal, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1057,
        'name' => 'Parafinas y Aceites, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1058,
        'name' => 'Evangelina Garma Minerva',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1059,
        'name' => 'PLASTICOS Y EMPAQUES TECNOLOGICOS',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1060,
        'name' => 'SANBORN HERMANOS',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1061,
        'name' => 'Jose Roberto Leciano Heredia',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1062,
        'name' => 'MAYRA VELAZQUEZ MENDEZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1063,
        'name' => 'Yara de los Angeles Brindis Escobar',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1064,
        'name' => 'Grupo Cebrami, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1065,
        'name' => 'FRANCISCO MORONES BERNAL',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1066,
        'name' => 'Carlos Alberto Chapoy Muñiz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1067,
        'name' => 'Maria de Lourdes Martinez Delgado',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1068,
        'name' => 'ERICK OVIEL DIAZ MENDEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1069,
        'name' => 'SIC Soluciones en Informatica y Conectividad, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1070,
        'name' => 'CONSTANTINO HERNANDEZ MAZA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1071,
        'name' => 'DANY CRUZ SOLIS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1072,
        'name' => 'Leopoldo Gonzalez Vega',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1073,
        'name' => 'JIMMY YAIR ESQUIVEL CASTILLO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1074,
        'name' => 'Comercializadora Jimenez Gonzalez, S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1075,
        'name' => 'Alma Delia Bernal Soria',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1076,
        'name' => 'Hector Diaz Trejo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1077,
        'name' => 'Raquel Mireya Lopez Vazquez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1078,
        'name' => 'SUPER FARMACIA LEON',
        'price_list_id' => '["110"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1079,
        'name' => 'Lluvia Daniela Onofre Kosonoy',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1080,
        'name' => 'Ricardo Vega Muñoz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1081,
        'name' => 'MERCERIA LA BODEGA',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1082,
        'name' => 'PAPELERIA Y CENTRO DE COMPUTO NEZAHUALCOYOTL',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1083,
        'name' => 'Comercializadora Baccanu México, S.A. de C.V.',
        'price_list_id' => '["21"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1084,
        'name' => 'PAPELERIA Y MERCERIA LEON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1085,
        'name' => 'LIBRERIA RAMIREZ JUGUETILANDIA',
        'price_list_id' => '["99"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1086,
        'name' => 'Jacs Inmobiliaria, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1087,
        'name' => 'ELIAS MEDINA HUCHIN',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1088,
        'name' => 'EL GUERRERO PAPELERIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1089,
        'name' => 'Jose Humberto Rodriguez Diaz de Leon',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1090,
        'name' => 'Fernando Lorenzo Lopez Novelo',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1091,
        'name' => 'CARLOS JAIMEZ VAZQUEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1092,
        'name' => 'VAZQUEZ HERMANOS Y COMPAÑIA',
        'price_list_id' => '["113"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1093,
        'name' => 'Carlos Andres Alvarado Marmolejo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1094,
        'name' => 'Rag Soluciones en Negocios, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1095,
        'name' => 'Universidad Nacional Autonoma de México',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1096,
        'name' => 'Tanya Lorena Ortiz Zorrilla',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1097,
        'name' => 'ARTURO SEBASTIAN CASTELLANOS CORONA',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1098,
        'name' => 'JUAN MISAEL HERNANDEZ ARCOS',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1099,
        'name' => 'GRUPO PAPELERO ROVELO',
        'price_list_id' => '["40"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1100,
        'name' => 'Miriam Marilene Sarabia Marin',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1101,
        'name' => 'Mercado Tepeaca, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1102,
        'name' => 'LIBRERIA Y PAPELERIA TEPEYAC DEL LAGO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1103,
        'name' => 'Ofimax, S. de R.L. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1104,
        'name' => 'MARCO TULIO PALE VICUÑA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1105,
        'name' => 'Distribuidora Mayorista de Oficinas, S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1106,
        'name' => 'M.C. PAPELERIAS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1107,
        'name' => 'Organización Papelera California, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1108,
        'name' => 'Paper Spot Torreon, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1109,
        'name' => 'Alejandra Guzman Espinosa',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1110,
        'name' => 'CARLA CECILIA SANTANA GARCIA',
        'price_list_id' => '["47"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1111,
        'name' => 'Juana Mendez Aguilar',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1112,
        'name' => 'Roberto Apatiga Basilio',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1113,
        'name' => 'ZERO MUNDO PAPELERO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1114,
        'name' => 'JULIO HERNANDEZ BONILLA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1115,
        'name' => 'Abraham Elias Sanchez Vazquez',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1116,
        'name' => 'Alvaro Velazquez Vilchis',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1117,
        'name' => 'Tecnodars, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1118,
        'name' => 'Onti Comercial, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1119,
        'name' => 'Maria de la Luz Ramos Hernandez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1120,
        'name' => 'Juventino Leodegario Macias Tapia',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1121,
        'name' => 'ISAC SURIANO NIÃ‘O',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1122,
        'name' => 'TANIA SASET PORTILLO BELTRAN',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1123,
        'name' => 'DISTRIBUIDORA COPY ART',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1124,
        'name' => 'Sirenia Gabriela Rios Islas',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1125,
        'name' => 'EL ESCRITORIO MODERNO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1126,
        'name' => 'ISIDRA FLORES VAZQUEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1127,
        'name' => 'Jose Luis Vazquez Esquivel',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1128,
        'name' => 'Miriam Torres Muñoz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1129,
        'name' => 'Maria de Lourdes Esquivel Piña',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1130,
        'name' => 'OFIX',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1131,
        'name' => 'Comercializadora y Distribuidora Brime S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1132,
        'name' => 'Rusalka S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1133,
        'name' => 'Soluciones Aplicadas De Alta Tecnologia S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1134,
        'name' => 'Raul Alfredo Andrade Alvarado',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1135,
        'name' => 'Esperanza Monserrat Mendoza Lagunas',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1136,
        'name' => 'Pedro Bote Azueta',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1137,
        'name' => 'Miriam Lorena Marcos Wong',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1138,
        'name' => 'DIANA GUADALUPE PEREA BARRIOS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1139,
        'name' => 'Advanced Engine Rebuilding SA de CV',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1140,
        'name' => 'LUZ LETICIA LOZA PEREZ',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1141,
        'name' => 'Papeleria Breva S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1142,
        'name' => 'Nueva Papelera Catalunya, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1143,
        'name' => 'Mercadeo y Asociados S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1144,
        'name' => 'SUPER PAPELERA',
        'price_list_id' => '["21"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1145,
        'name' => 'Luisa Del Carmen Martinez Sanchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1146,
        'name' => 'Lydia Zulema Sarmiento Manjarrez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1147,
        'name' => 'Francisco Eduardo Chavez Moedano',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1148,
        'name' => 'TONY TIENDAS',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1149,
        'name' => 'Miguel Gongora Leon',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1150,
        'name' => 'Ciro Mojica Reyes',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1151,
        'name' => 'PAPELERIA GENOVA',
        'price_list_id' => '["33"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1152,
        'name' => 'Ismael Morquecho Garcia',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1153,
        'name' => 'MANUEL MEDINA JIMENEZ',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1154,
        'name' => 'Ana Carolina Herrera Cuadra',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1155,
        'name' => 'Heriberto Pinedo Alvarez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1156,
        'name' => 'Cedis Fah Del Sureste S.A. de C.V.',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1157,
        'name' => 'Jorge Basilio Hawach Charur',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1158,
        'name' => 'ALMA LORENIA REYNA MARTINEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1159,
        'name' => 'ROLUJ PAPELERIA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1160,
        'name' => 'ANGELA REYES JARQUIN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1161,
        'name' => 'Maria Elena Caballero Pineda',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1162,
        'name' => 'TIENDAS PAPERIX',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1163,
        'name' => 'JUAN GARCIA VALENCIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1164,
        'name' => 'MARCOS JIMENEZ GONZALEZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1165,
        'name' => 'Enrique Morquecho Gonzalez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1166,
        'name' => 'Virgilio Morquecho Gonzalez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1167,
        'name' => 'Crona S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1168,
        'name' => 'NANCY PAOLA GARCIA HUIZAR',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1169,
        'name' => 'Reparto S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1170,
        'name' => 'Papeleria El Cubo S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1171,
        'name' => 'Distribuidora Papelera Colmenero S.A. de C.V.',
        'price_list_id' => '["35"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1172,
        'name' => 'EL PAJE DE TEHUACAN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1173,
        'name' => 'Juan Jorge Yescas Cañez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1174,
        'name' => 'GRUPO ESZERLAG',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1175,
        'name' => 'Dincsa Grupo Empresarial, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1176,
        'name' => 'Corporativo H9, S.A. de C.V.',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1177,
        'name' => 'JOSE SANCHEZ VELAZQUEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1178,
        'name' => 'Georgina Luna Diaz',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1179,
        'name' => 'MARI TERE CASTAÑEDA GARCIA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1180,
        'name' => 'EDGAR GUILLERMO HERNANDEZ RAMIREZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1181,
        'name' => 'C. O PIEL REGALOS Y ACCESORIOS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1182,
        'name' => 'Top Data Mayoreo, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1183,
        'name' => 'NUEVA WAL MART DE MEXICO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1184,
        'name' => 'LA HIDALGO MERCERIA Y PAPELERIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1185,
        'name' => 'Erasto Pastor Hernández',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1186,
        'name' => 'PAPELERA DEL NORTE DE LA LAGUNA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1187,
        'name' => 'Jesus Alberto Ocaña Martinez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1188,
        'name' => 'Decoraciones Posters y Marcos S.A. de C.V.',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1189,
        'name' => 'CASA ORTIZ SAN LUIS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1190,
        'name' => 'The Setmx S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1191,
        'name' => 'Jose Alberto Cisneros Zevada',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1192,
        'name' => 'GRUPO PAPELERO ZIGMA',
        'price_list_id' => '["121"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1193,
        'name' => 'Surtidora de Oficinas y Escolar S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1194,
        'name' => 'ANA MARIA PASTOR FIGUEROA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1195,
        'name' => 'Santiago Mejía Rios',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1196,
        'name' => 'EDUARDO LOPEZ MIRANDA',
        'price_list_id' => '["44"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1197,
        'name' => 'ANA LYNDA LUJANO MALDONADO',
        'price_list_id' => '["36"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1198,
        'name' => 'Gloria González Mondragon',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1199,
        'name' => 'Irma Yeslie Romero Granados',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1200,
        'name' => 'JOSE CONSTANTINO HERRERA GARCIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1201,
        'name' => 'Productos Arpapel, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1202,
        'name' => 'Gilda Verenice Garcia Aguirre',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1203,
        'name' => 'Leticia Ambriz Jacinto',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1204,
        'name' => 'Claudia Julita Hernandez Villar',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1205,
        'name' => 'JOSE LUIS PINEDA DE LA ROSA',
        'price_list_id' => '["54"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1206,
        'name' => 'Estibaliz Miroslava Gómez González',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1207,
        'name' => 'Rafael Pérez Reyes',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1208,
        'name' => 'MARIA NATALIA VILLALOBOS ROA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1209,
        'name' => 'Amni Jokabed Leciano Heredia',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1210,
        'name' => 'Mario Eudaldo Hernadez Marroquin',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1211,
        'name' => 'EXCELENTE ORGANIZACION DE SERVICIO',
        'price_list_id' => '["15"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1212,
        'name' => 'ALHELI ZULEMA SANCHEZ ELIZONDO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1213,
        'name' => 'Nueva Vision de Manejo de Recursos, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1214,
        'name' => 'Juan Manuel Codemo Guzman',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1215,
        'name' => 'Fernando Angel Sanchez Mercado',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1216,
        'name' => 'PLASTICOS CAM',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1217,
        'name' => 'Emporio Automotriz de Tijuana, S.A.P.I. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1218,
        'name' => 'Eduardo Sanchez Esparza',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1219,
        'name' => 'SERVICIOS CRAREMA',
        'price_list_id' => '["34"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1220,
        'name' => 'Sandra Garcia Santiago',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1221,
        'name' => 'Moises Jassan Mizrahi',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1222,
        'name' => 'EDWIN MENDOZA LAGUNAS',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1223,
        'name' => 'Jose Angel Rangel Rodriguez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1224,
        'name' => 'Arrendadora de Centros Comerciales S. de R.L. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1225,
        'name' => 'RICARDO GARCIA UCAN',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1226,
        'name' => 'Ruben M Salazar Marquez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1227,
        'name' => 'REGALOS EJECUTIVOS ORTIZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1228,
        'name' => 'Escolar, Oficina y Tecnologia, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1229,
        'name' => 'Juan Carlos Vazquez Vazquez',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1230,
        'name' => 'Corporativo Mefrila, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1231,
        'name' => 'Martha Leticia Urbina Santoyo',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1232,
        'name' => 'POSADAS & COLIN GRUPO PAPELERO',
        'price_list_id' => '["129"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1233,
        'name' => 'RICARDO YUKIO SHIMIZU NAGAI',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1234,
        'name' => 'Roberto Nosaka Matsumoto',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1235,
        'name' => 'Distribuidora de Papeleria Olguin, S.A. de C.V.',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1236,
        'name' => 'DISTRIBUIDORA PAPELERA DE TEHUACAN',
        'price_list_id' => '["51"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1237,
        'name' => 'Mariana Pacheco Aguilar',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1238,
        'name' => 'AISA COMPUTO Y PAPELERIA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1239,
        'name' => 'MARIO MORALES BORBON',
        'price_list_id' => '["100"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1240,
        'name' => 'ANTONIA ELENA CASTRO',
        'price_list_id' => '["115"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1241,
        'name' => 'DISTRIBUIDORA PAPELERA MEXICO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1242,
        'name' => 'JIE IMPORT',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1243,
        'name' => 'Jose Manuel Gomez Avila',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1244,
        'name' => 'HENKI IX DISTRIBUCIONES',
        'price_list_id' => '["60"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1245,
        'name' => 'Organizacion Papelera Mexicana',
        'price_list_id' => '["25"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1246,
        'name' => 'DISEÃ‘O Y ARTE ROYALL',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1247,
        'name' => 'IVAN RUBIO INDA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1248,
        'name' => 'J.M. SUMINISTROS DE CONSUMIBLES',
        'price_list_id' => '["17"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1249,
        'name' => 'GRUPO TOKIO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1250,
        'name' => 'ESPERANZA MENDOZA TAPIA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1251,
        'name' => 'Auren Legal del Centro SC',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1252,
        'name' => 'Bdot S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1253,
        'name' => 'GVC Arquitectos S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1254,
        'name' => 'Iglesia del Nazareno en Mexico Distrito Noreste A.R.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1255,
        'name' => 'Natalia Lorena Antonoff Botello',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1256,
        'name' => 'Alta Tecnologia en Construccion e Instalaciones, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1257,
        'name' => 'Leo Alberto Macias Marquez',
        'price_list_id' => '["114"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1258,
        'name' => 'TECNOLOGIA DE DESARROLLO E INSUMOS',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1259,
        'name' => 'Enrique Paredes Mendoza',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1260,
        'name' => 'MEXTRUFILM',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1261,
        'name' => 'NANDA INSUMOS Y SERVICIOS',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1262,
        'name' => 'OFIPAPS COMERCIALIZADORA, DISTRIBUIDORA Y PRODUCTORA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1263,
        'name' => 'Condominio Monte San Andres',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1264,
        'name' => 'Embajada de la Republica de Corea',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1265,
        'name' => 'Instalaciones Mecanoelectricas y Suministros Ferreteros, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1266,
        'name' => 'The Edge Films S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1267,
        'name' => 'OFIBIZMART',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1268,
        'name' => 'Cureño Barquet Juan Jorge',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1269,
        'name' => 'ALMA LAURA GRANADOS CORZO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1270,
        'name' => 'LA TARJETA JR',
        'price_list_id' => '["55"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1271,
        'name' => 'Maria Idelia Borrego Sanchez',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1272,
        'name' => 'Luz Oralia Lira Amaya',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1273,
        'name' => 'DISTRIBUIDORA DIDACTICA ESCOLAR',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1274,
        'name' => 'Automotriz Lomas Verdes, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1275,
        'name' => 'Archivos de Carton y Mas, S.A. de C.V.',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1276,
        'name' => 'CELEBRA GLOBERIA',
        'price_list_id' => '["89"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1277,
        'name' => 'ALONDRA ARIEL HERRERA SILVA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1278,
        'name' => 'COMERCIALIZADORA ZEGUIZ',
        'price_list_id' => '["50"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1279,
        'name' => 'JOSE TRINIDAD AZPEITIA DE LA TORRE',
        'price_list_id' => '["119"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1280,
        'name' => 'Maria Alejandra Leon Ruiz',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1281,
        'name' => 'ELIAS HUMBERTO RAMOS CABRERA',
        'price_list_id' => '["14"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1282,
        'name' => 'Trejo Garcia Jorge Antonio',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1283,
        'name' => 'PROMOTORA Y COMERCIALIZADORA LINCOLN',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1284,
        'name' => 'ISAAC ELIU LECIANO HEREDIA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1285,
        'name' => 'F. DOMENE Y SOCIOS',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1286,
        'name' => 'GUADALUPE VAZQUEZ ROMERO',
        'price_list_id' => '["49"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1287,
        'name' => 'GOMEZ ESPARZA Y CIA PAPELERIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1288,
        'name' => 'IRAM MONTIEL YAÑEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1289,
        'name' => 'MAS QUE UN CUADERNO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1290,
        'name' => 'DISTRIBUIDORA OC MEXICO',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1291,
        'name' => 'BE YOUTIFUL',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1292,
        'name' => 'Antonio Garcia Becerra',
        'price_list_id' => '["120"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1293,
        'name' => 'JAIME ENDO SUZUKI',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1294,
        'name' => 'Roberto Agustin Garduño Valdes',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1295,
        'name' => 'TORCAM PAPELERA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1296,
        'name' => 'LEONILA MERCADO ORTIZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1297,
        'name' => 'COMERCIO INTEGRAL DE OFICINAS VAK',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1298,
        'name' => 'DISTRIBUIDORA LEOMI',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1299,
        'name' => 'COMPUSONICA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1300,
        'name' => 'EDITH GARCIA MUNGUIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1301,
        'name' => 'MARCO ANTONIO FRANCISCO ZEPEDA LEYVA',
        'price_list_id' => '["39"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1302,
        'name' => 'JOSEFA SANTAMARIA AGUIRRE',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1303,
        'name' => 'GRUPO EMPRESARIAL ANCAR',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1304,
        'name' => 'DISTRIBUIDORA YOVIC',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1305,
        'name' => 'ROSALBA LETICIA CAMILO GUTIERREZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1306,
        'name' => 'REBECA FLORES ALEGRIA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1307,
        'name' => 'COMERCIALIZADORA CHIAPANECA DE PRODUCTOS Y SERVICIOS GM',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1308,
        'name' => 'FRANCISCO JAVIER ESPINOSA CRUZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1309,
        'name' => 'JOSE LUIS ARANDA GARCIA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1310,
        'name' => 'PAPELERIA ROMAPAVE',
        'price_list_id' => '["107"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1311,
        'name' => 'ENCUADERNACION GENERAL',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1312,
        'name' => 'JORGE IVAN AVILA AVILA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1313,
        'name' => 'MARTHA ESTELA TORREBLANCA GONZALEZ',
        'price_list_id' => '["22"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1314,
        'name' => 'OPERADORA DE OFICINAS',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1315,
        'name' => 'GUICELDA PEDRAZA HERNANDEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1316,
        'name' => 'MAYRA GARDUÑO PEDRAZA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1317,
        'name' => 'KARLA ITZHEL ARREOLA HERNANDEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1318,
        'name' => 'REYNA NATHALY VAZQUEZ HERNANDEZ',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1319,
        'name' => 'MANUEL SANCHEZ ESPARZA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1320,
        'name' => 'MARIANA GUIDO BARBA',
        'price_list_id' => '["33"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1321,
        'name' => 'ARACELI OLIVARES MORALES',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1322,
        'name' => 'MINELIA FLORES ZI',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1323,
        'name' => 'ARISTEO LLAVEN TOLEDO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1324,
        'name' => 'EL PUNTO FINO DE OAXACA DISTRIBUIDORA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1325,
        'name' => 'DISTRIBUIDORA EL TIGRE DEL SURESTE',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1326,
        'name' => 'LEONEL LOPEZ RAMIREZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1327,
        'name' => 'GEM VENTAS',
        'price_list_id' => '["65,  66,  67,  68"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1328,
        'name' => 'ANA CAMILA LOAIZA GOMEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1329,
        'name' => 'RICARDO MATA VELAZQUEZ',
        'price_list_id' => '["24"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1330,
        'name' => 'CRISTOFER DE ITA GARCIA ZAPATA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1331,
        'name' => 'TIENDAS CHAPUR',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1332,
        'name' => 'ULISES ORDAZ LOPEZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1333,
        'name' => 'MARTIN ALFARO LOREDO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1334,
        'name' => 'ALMACENES FARAH',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1335,
        'name' => 'MGGM COMERCIALIZADORA',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1336,
        'name' => 'GLORIA OLIMPIA BAUTISTA CALDERON',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1337,
        'name' => 'ELISABETH DE LOS ANGELES VERA RAMIREZ',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1338,
        'name' => 'MARTIN ALBERTO MANJARREZ PEREZ',
        'price_list_id' => '["1 Gob"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1339,
        'name' => 'PATRICIA DEL CARMEN GONZALEZ ARCEO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1340,
        'name' => 'ALMA ROSA SIERRA MENDEZ',
        'price_list_id' => '["122,  123"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1341,
        'name' => 'PAPELERIA EL ESCRITORIO',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1342,
        'name' => 'DISTRIBUIDORA DE PAPELES DEL RINCON',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1343,
        'name' => 'JESSICA HANNAH CRUZ HEDGES',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1344,
        'name' => 'JUAN MANUEL RUIZ HERNANDEZ',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1345,
        'name' => 'SUMINISTROS DE OFICINA Y PAPELERIA INDUSTRIAL',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1346,
        'name' => 'LUZ MARIA GARCIA CASTELLANOS',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1347,
        'name' => 'ELECTRICA HIDRAULICA DEL SURESTE',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1348,
        'name' => 'SOLUCIONES CORPORATIVAS BALHER',
        'price_list_id' => '["130"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1349,
        'name' => 'EDGAR MORA GOMEZ',
        'price_list_id' => '["27"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1350,
        'name' => 'JOSE IGNACIO ROLANDO GAMA LIMA',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1351,
        'name' => 'HUGO IGNACIO CERON MENDOZA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1352,
        'name' => 'MARIO SOLIS TEJEDA',
        'price_list_id' => '[]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1353,
        'name' => 'IVAN HUITRON NAVA',
        'price_list_id' => '["26"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1354,
        'name' => 'ERNESTO RODRIGUEZ GUILLEN',
        'price_list_id' => '["32"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1355,
        'name' => 'INOCENCIO PASCUAL TRINIDAD',
        'price_list_id' => '["38"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1356,
        'name' => 'DISTRIBUIDOR DE ARTICULOS DE OFICINA',
        'price_list_id' => '["5"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1357,
        'name' => 'LORENA RAMIREZ SALINAS',
        'price_list_id' => '["39"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1358,
        'name' => 'DIEGO SAENZ GARCIA',
        'price_list_id' => '["26"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1359,
        'name' => 'MARIA DE LOURDES PEÑA SAUCEDO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1360,
        'name' => 'SUPERLA',
        'price_list_id' => '["27"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1361,
        'name' => 'NAKAUMA HERMANOS',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1362,
        'name' => 'NANCY LIZBETH ZARATE VENTURA',
        'price_list_id' => '["116"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1363,
        'name' => 'NEMORIO MARTINEZ ORTEGA',
        'price_list_id' => '["26"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1364,
        'name' => 'JURETO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'id' => 1365,
        'name' => 'JORGE ARTURO FLORES BORREGO',
        'price_list_id' => '["1"]',
        'created_at' => now(),
        'updated_at' => now()
    ],
    // [
    //     'id' => MOSTR,
    //     'name' => 'CLIENTE MOSTRADOR',
    //     'price_list_id' => '["1"]',
    //     'created_at' => now(),
    //     'updated_at' => now()
    // ]
]);
    }
}
