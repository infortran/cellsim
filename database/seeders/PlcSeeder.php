<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_components')->insert([
            'categoria_id' => 1,
            'title_section' => 'Titulo',
            'title_banner' => 'Banner',
            'subtitle_banner' => 'Subtitulo banner',
            'price_banner' => 19990,
            'img_banner' => 'image.png',
            'max_products' => 5
        ]);
    }
}
