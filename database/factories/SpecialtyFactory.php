<?php

namespace Database\Factories;

use App\Models\Specialty;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialtyFactory extends Factory
{
    protected $model = Specialty::class;

    public function definition()
    {
        return [
            'tenant_id' => Tenant::inRandomOrder()->first()->id ?? Tenant::factory(), // Usa un tenant existente o crea uno si no existe
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
