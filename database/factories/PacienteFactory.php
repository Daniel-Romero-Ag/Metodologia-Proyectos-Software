<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(1),
            'apellido'=>$this->faker->sentence(1),
            'edad'=>$this->faker->sentence(1),
            'telefono'=>$this->faker->sentence(1),
            'alergias'=>$this->faker->sentence(1),
            'padecimientos_previos'=>$this->faker->sentence(1),
            'intervenciones_previas'=>$this->faker->sentence(1),
            'id_tipos_sangres'=>$this->faker->numberBetween(1,20),
            'id_sexos'=>$this->faker->numberBetween(1,10)
        ];
    }
}
