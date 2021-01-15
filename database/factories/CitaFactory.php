<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $month= $this->faker->numberBetween(1,12);
        ($month==2) ? $day= $this->faker->numberBetween(1,28) : $day= $this->faker->numberBetween(1,30);
        $hour=$this->faker->numberBetween(8,22); 
        $minute=$this->faker->numberBetween(0,1); 
        $minute*=30;
        return [
            'id_pacientes'=>$this->faker->numberBetween(1,30),
            'id_doctores'=>$this->faker->numberBetween(1,30),
            'fecha'=>'2020'."-".$month."-".$day,
            'hora'=>$hour.":".$minute.":00"
        ];
    }
}
