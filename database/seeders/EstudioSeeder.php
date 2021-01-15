<?php

namespace Database\Seeders;

use App\Models\Estudio;
use Illuminate\Database\Seeder;

class EstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudio::factory(30)->create();
    }
}
