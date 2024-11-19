<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        return [
            'tenant_id' => Tenant::factory(),
            'name' => $this->faker->company,
            'prefix' => strtoupper($this->faker->lexify('???')),
            'business_name' => $this->faker->companySuffix,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->companyEmail,
            'phone' => $this->faker->phoneNumber,
            'tax_id' => strtoupper($this->faker->bothify('???-#########')),
            'status' => $this->faker->boolean(90),
        ];
    }
}
