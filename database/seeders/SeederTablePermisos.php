<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablePermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos =[

            //permisos para roles
            'Ver-rol',
            'Crear-rol',
            'Editar-rol',
            'Borrar-rol',
            //permisos para roles
            'Ver-novedad',
            'Crear-novedad',
            'Editar-novedad',
            'Borrar-novedad',
 
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
