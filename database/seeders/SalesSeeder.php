<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'nombre_empleado' => 'JohnDoe',
            'nombre_cliente' => 'aguirre ',
            'precio' => '200',
            'fecha_compra' => '23',
            'created_at' => now(),
            'updated_at' => now()
        ]);   
        
    }
}
