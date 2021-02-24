<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([

            [
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-1'
            ],
            [
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-2'
            ],
            [
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-3'
            ],
            [
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-4'
            ],
            [
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-5'
            ],
            [
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-6'
            ],[
                'categoria_id' => 0,
                'marca_id' => 0,
                'name' => 'producto ejemplo',
                'description' => 'descripcion ejemplo',
                'price' => 10000,
                'oldprice' => 15000,
                'enabled' => true,
                'stock' => 20,
                'img' => '1608002760.png',
                'slug' => 'producto-ejemplo-7'
            ]]);
    }
}
