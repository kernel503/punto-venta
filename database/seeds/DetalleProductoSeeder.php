<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalle_producto')->insert([
            'producto_id' => 1,
            'precio_unitario' => 16.0,
            'cantidad_disponible' => 3,
            'detalle' => 'Talla S',
            'ubicacion' => 'Oficina central',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detalle_producto')->insert([
            'producto_id' => 1,
            'precio_unitario' => 18.50,
            'cantidad_disponible' => 30,
            'detalle' => 'Talla M',
            'ubicacion' => 'Oficina central',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detalle_producto')->insert([
            'producto_id' => 2,
            'precio_unitario' => 32.0,
            'cantidad_disponible' => 10,
            'detalle' => 'Talla 30',
            'ubicacion' => 'Oficina central',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detalle_producto')->insert([
            'producto_id' => 2,
            'precio_unitario' => 35.0,
            'cantidad_disponible' => 10,
            'detalle' => 'Talla 36',
            'ubicacion' => 'Oficina central',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detalle_producto')->insert([
            'producto_id' => 3,
            'precio_unitario' => 8.50,
            'cantidad_disponible' => 5,
            'detalle' => 'Rayado',
            'ubicacion' => 'Biblioteca',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('detalle_producto')->insert([
            'producto_id' => 3,
            'precio_unitario' => 8.50,
            'cantidad_disponible' => 1,
            'detalle' => 'Cuadriculado',
            'ubicacion' => 'Biblioteca',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
