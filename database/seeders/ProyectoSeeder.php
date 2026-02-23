<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyecto::create([
            'nombre' => 'Proyecto Web',
            'descripcion' => 'Desarrollo de aplicación web en Laravel con autenticación',
        ]);

        Proyecto::create([
            'nombre' => 'Sistema de Gestión',
            'descripcion' => 'Sistema de gestión de estudiantes y proyectos',
        ]);

        Proyecto::create([
            'nombre' => 'API REST',
            'descripcion' => 'Desarrollo de API RESTful con Laravel',
        ]);
    }
}

