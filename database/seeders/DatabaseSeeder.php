<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SexoSeeder::class);
        $this->call(Tipos_sangreSeeder::class);
        $this->call(EspecialidadeSeeder::class);
        $this->call(EstudioSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(DoctoreSeeder::class);
        $this->call(CitaSeeder::class);
        $this->call(Estudios_programadoSeeder::class);
    }
}
