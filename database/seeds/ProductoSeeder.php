<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'id' => 1,
            'img_url' => 'https://www.bestshopping.es/WebRoot/StoreES/Shops/63731684/5CC8/27B6/EE0E/BEDF/2ECB/0A0C/6D0A/77F9/camiseta-portero-arco-amarillo-Kelme__124__Camiseta_Portero__124__Unisex__124__93605_amarilla.jpg',
            'nombre' => 'Camiseta deportiva',
            'grupo_inventario' => 'Ropa deportiva',
            'descripcion' => 'Camiseta deportiva unisex',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('producto')->insert([
            'id' => 2,
            'img_url' => 'https://i.pinimg.com/474x/ab/2c/5a/ab2c5ac3d8729d14acad93ac451fefa7.jpg',
            'nombre' => 'Calzoneta deportiva',
            'grupo_inventario' => 'Ropa deportiva',
            'descripcion' => 'Calzoneta deportiva para hombre',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('producto')->insert([
            'id' => 3,
            'img_url' => 'https://supermercadosronald.vteximg.com.br/arquivos/ids/157963-500-500/Norma-Cuaderno-Universal-Cuadros-60-h-7702111376533.jpg?v=637594785615570000',
            'nombre' => 'Cuadernos',
            'grupo_inventario' => 'Utiles escolares',
            'descripcion' => '',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
