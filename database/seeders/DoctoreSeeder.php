<?php

namespace Database\Seeders;

use App\Models\Doctore;
use Illuminate\Database\Seeder;

class DoctoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctore::factory(30)->create();
    }
}
