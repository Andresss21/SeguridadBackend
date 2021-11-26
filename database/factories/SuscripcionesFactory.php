<?php

namespace Database\Factories;

use App\Models\suscripciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuscripcionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = suscripciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Nombre de plan',
            'subtitulo' => 'Subtitulo',
            'precio' => 10,
            'descripcion' => 'Descripcion de plan',
            'beneficio1' => 'Primer beneficio desc', 
            'beneficio2' => 'Segundo beneficio desc', 
            'beneficio3' => 'Tercer beneficio desc', 
            'created_at' => now(),
        ];
    }
}
