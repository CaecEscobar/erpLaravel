<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAndProfileSeeder extends Seeder
{
    public function run(): void
    {
        $password = Hash::make('1234qwer');

        // DB::table('users')->insert([
        //     'id' => 2,
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => $password,
        //     'role_id' => '1',
        // ]);

        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Rodolfo Lopez Morales', 'email' => 'rodolfo1@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '1', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 3, 'name' => 'Heberto Ceseña', 'email' => 'heberto3@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '3', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 6, 'name' => 'Manuel Sanchez Esparza', 'email' => 'manuel6@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '6', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 18, 'name' => 'Intercompañías', 'email' => 'intercompanías18@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '18', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 23, 'name' => 'Victor Manuel Perez Duran', 'email' => 'victor.manuel23@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '23', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 24, 'name' => 'Juan Zarate', 'email' => 'juan24@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '24', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 27, 'name' => 'Miroslava Gomez Gonzalez', 'email' => 'miroslava27@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '27', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 29, 'name' => 'Reyna Nathaly Vazquez Hernande', 'email' => 'reyna.nathaly29@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '29', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 30, 'name' => 'Victor Manuel Perez Duran', 'email' => 'victor.manuel30@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '30', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 32, 'name' => 'Sureste', 'email' => 'sureste32@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '32', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 34, 'name' => 'Jeanette Treviño Zavala', 'email' => 'jeanette34@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '34', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 35, 'name' => 'Juan Zarate', 'email' => 'juan35@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '35', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 36, 'name' => 'Juan Zarate', 'email' => 'juan36@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '36', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 37, 'name' => 'Pedro Soto Solis', 'email' => 'pedro37@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '37', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 38, 'name' => 'Reyna Nathaly Vazquez Hernande', 'email' => 'reyna.nathaly38@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '3' , 'vendor_number' => '38', 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 39, 'name' => 'Administrador Central', 'email' => 'admin@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '2' , 'vendor_number' => null, 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 40, 'name' => 'Gerente de Ventas', 'email' => 'gerente@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '4' , 'vendor_number' => null, 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 41, 'name' => 'Facturacion', 'email' => 'facturacion@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '5' , 'vendor_number' => null, 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['id' => 42, 'name' => 'Empresa', 'email' => 'empresa@mail.com', 'email_verified_at' => '2025-08-06 16:28:48', 'password' => $password, 'role_id' => '6' , 'vendor_number' => null, 'remember_token' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48']
        ]);

        DB::table('user_profiles')->insert([
            ['user_id' => 1, 'nombre' => 'Rodolfo', 'apellido_paterno' => 'Lopez', 'apellido_materno' => 'Morales', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 3, 'nombre' => 'Heberto', 'apellido_paterno' => 'Ceseña', 'apellido_materno' => '', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 6, 'nombre' => 'Manuel', 'apellido_paterno' => 'Sanchez', 'apellido_materno' => 'Esparza', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 18, 'nombre' => 'Intercompañías', 'apellido_paterno' => '', 'apellido_materno' => '', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 23, 'nombre' => 'Victor Manuel', 'apellido_paterno' => 'Perez', 'apellido_materno' => 'Duran', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 24, 'nombre' => 'Juan', 'apellido_paterno' => 'Zarate', 'apellido_materno' => '', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 27, 'nombre' => 'Miroslava', 'apellido_paterno' => 'Gomez', 'apellido_materno' => 'Gonzalez', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 29, 'nombre' => 'Reyna Nathaly', 'apellido_paterno' => 'Vazquez', 'apellido_materno' => 'Hernande', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 30, 'nombre' => 'Victor Manuel', 'apellido_paterno' => 'Perez', 'apellido_materno' => 'Duran', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 32, 'nombre' => 'Sureste', 'apellido_paterno' => '', 'apellido_materno' => '', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 34, 'nombre' => 'Jeanette', 'apellido_paterno' => 'Treviño', 'apellido_materno' => 'Zavala', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 35, 'nombre' => 'Juan', 'apellido_paterno' => 'Zarate', 'apellido_materno' => '', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 36, 'nombre' => 'Juan', 'apellido_paterno' => 'Zarate', 'apellido_materno' => '', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 37, 'nombre' => 'Pedro', 'apellido_paterno' => 'Soto', 'apellido_materno' => 'Solis', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48'],
            ['user_id' => 38, 'nombre' => 'Reyna Nathaly', 'apellido_paterno' => 'Vazquez', 'apellido_materno' => 'Hernande', 'telefono_contacto' => '', 'location_id' => null, 'created_at' => '2025-08-06 16:28:48', 'updated_at' => '2025-08-06 16:28:48']
        ]);
    }
}