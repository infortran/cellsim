<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner_homes')->insert([
            'title' => 'Accesorios y protectores para telefonos y tablets',
            'text' => 'Desde',
            'price' => 29990,
            'url' => 'https://cellsim.cl'
        ]);
    }
}
