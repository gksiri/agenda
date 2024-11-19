<?php

namespace Database\Factories;

use App\Models\ClientTenantBranch;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientTenantBranchFactory extends Factory
{
    protected $model = ClientTenantBranch::class;

    public function definition()
    {
        return [
            'client_id' => \App\Models\Client::factory(),
            'tenant_id' => \App\Models\Tenant::factory(),
            'branch_id' => \App\Models\Branch::factory(),
        ];
    }
}
