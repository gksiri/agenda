<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = ['tenant_id', 'name', 'description'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function specialists()
    {
        return $this->hasMany(Specialist::class);
    }

    public function commissionConfigurations()
    {
        return $this->hasOne(CommissionConfiguration::class);
    }

    public function clientHistories()
    {
        return $this->hasMany(ClientHistory::class);
    }
}
