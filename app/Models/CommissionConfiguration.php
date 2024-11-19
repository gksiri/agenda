<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionConfiguration extends Model
{
    use HasFactory;

    protected $fillable = ['specialty_id', 'tenant_id', 'percentage'];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
