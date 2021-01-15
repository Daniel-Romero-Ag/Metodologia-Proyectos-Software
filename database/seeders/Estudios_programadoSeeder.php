<?php

namespace Database\Seeders;

use App\Models\Estudios_programado;
use Illuminate\Database\Seeder;

class Estudios_programadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudios_programado::factory(300)->create();
    }
}
