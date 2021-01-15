<?php

namespace Database\Seeders;

use App\Models\Tipos_sangre;
use Illuminate\Database\Seeder;

class Tipos_sangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipos_sangre::factory(30)->create();
    }
}
