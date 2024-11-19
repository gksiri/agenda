<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Company;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    protected $model = Branch::class;

    public function definition()
    {
        return [
            'company_id' => Company::factory(),
            'tenant_id' => Tenant::factory(),
            'name' => $this->faker->city . ' Branch',
            'location' => $this->faker->address,
        ];
    }
}
