<?php

namespace Database\Factories;

use App\Models\ClientHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientHistoryFactory extends Factory
{
    protected $model = ClientHistory::class;

    public function definition()
    {
        return [
            'client_id' => \App\Models\Client::factory(),
            'branch_id' => \App\Models\Branch::factory(),
            'specialty_id' => \App\Models\Specialty::factory(),
            'tenant_id' => \App\Models\Tenant::factory(),
            'history_date' => $this->faker->dateTimeThisYear(),
            'amount' => $this->faker->randomFloat(2, 50, 500),
            'comments' => $this->faker->sentence(),
        ];
    }
}
