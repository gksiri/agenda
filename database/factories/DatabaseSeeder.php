<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear 3 Tenants para pruebas
        Tenant::factory()->count(3)->create()->each(function ($tenant) {
            // Crear entre 2 y 5 clientes asociados al tenant actual
            Client::factory()->count(rand(2, 5))->create([
                'tenant_id' => $tenant->id, // Asegurarse de que cada cliente esté vinculado al tenant actual
            ]);
        });
    }
}
