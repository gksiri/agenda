<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\Company;
use App\Models\Branch;
use App\Models\User;
use App\Models\Client;
use App\Models\ClientHistory;
use App\Models\ClientTenantBranch;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

      

        // Crear 20 Tenants, cada uno con múltiples Companies, Branches, Users y Clients
        Tenant::factory()->count(20)->create()->each(function ($tenant) {
            // Crear varias compañías para cada tenant
            $companies = Company::factory()->count(rand(1, 2))->create(['tenant_id' => $tenant->id]);

            $companies->each(function ($company) use ($tenant) {
                // Crear varias sucursales para cada compañía
                $branches = Branch::factory()->count(rand(2, 4))->create([
                    'tenant_id' => $tenant->id,
                    'company_id' => $company->id,
                ]);

                // Crear entre 3 y 5 usuarios para cada compañía
                User::factory()->count(rand(3, 5))->create([
                    'company_id' => $company->id,
                    'tenant_id' => $tenant->id,
                    'branch_id' => $branches->random()->id,
                ]);

                // Crear entre 2 y 5 clientes para cada tenant, asignándoles un `tenant_id` válido
                Client::factory()->count(rand(2, 5))->create([
                    'tenant_id' => $tenant->id, // Asociar cada cliente con el tenant actual
                ])->each(function ($client) use ($tenant, $branches) {
                    // Crear una entrada en la tabla pivote para asociar el cliente con el tenant y una sucursal
                    ClientTenantBranch::factory()->create([
                        'client_id' => $client->id,
                        'tenant_id' => $tenant->id,
                        'branch_id' => $branches->random()->id,
                    ]);

                    // Crear entre 1 y 3 registros de historial de cliente para cada cliente
                    ClientHistory::factory()->count(rand(1, 3))->create([
                        'client_id' => $client->id,
                    ]);
                });
            });
        });
    }
}
