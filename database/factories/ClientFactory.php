<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'tenant_id' => Tenant::factory(), // Asociar cada cliente a un tenant
            'name' => $this->faker->name,
            'rut' => $this->faker->unique()->bothify('########-#'), // Generar un RUT único simulado
            'birth_date' => $this->faker->date(),
            'status' => $this->faker->boolean(),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
