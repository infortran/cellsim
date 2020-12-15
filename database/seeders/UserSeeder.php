<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Freddy',
            'lastname' => 'Perez',
            'email' => 'freddy.perez.trabajos@gmail.com',
            'password' => '$2y$10$sVwwiepca5wECk9VKFHp4ODWhbXSqoTf9WNUVxEYaLF01HGTifEbS',
            'tel' => '+56 9 47065823',
            'img' => 'avatar.png'
            ]);
    }
}
