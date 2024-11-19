<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{
    protected $model = Tenant::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'domain' => $this->faker->domainName,
            'subscription_type' => $this->faker->randomElement(['free', 'premium', 'enterprise']),
            'amount' => $this->faker->numberBetween(100, 1000),
            'bill_date' => $this->faker->date(),
            'status' => $this->faker->boolean(80),
            'share_clients_across_branches' => $this->faker->boolean(50),
        ];
    }
}
