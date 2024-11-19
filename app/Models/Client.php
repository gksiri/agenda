<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Definir los atributos que se pueden asignar en masa
    protected $fillable = [
        'tenant_id',
        'name',
        'rut',
        'birth_date',
        'status',
        'email',
        'phone',
        'address',
    ];

    // Relación con Tenant
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    // Relación con citas (appointments)
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // Relación con historial de cliente (client histories)
    public function clientHistories()
    {
        return $this->hasMany(ClientHistory::class);
    }
}
