<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTenantBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'tenant_id',
        'branch_id',
    ];

    // Define otras relaciones o configuraciones del modelo aquí si es necesario
}
