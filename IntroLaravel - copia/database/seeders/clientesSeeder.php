<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Andy',
                'apellido' => 'Arredondo',
                'correo' => 'andyarredondo@gmail.com',
                'telefono' => '1234567890',
            ], [
                'nombre' => 'Ayrton',
                'apellido' => 'Sepúlveda',
                'correo' => 'ayrton@gmail.com',
                'telefono' => '1234567891',
            ], [
                'nombre' => 'Noel',
                'apellido' => 'Lol',
                'correo' => 'noel@gmail.com',
                'telefono' => '1234567892',
            ]]);
    }
}
