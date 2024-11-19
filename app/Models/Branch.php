<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'tenant_id', 'name', 'location'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function specialists()
    {
        return $this->hasMany(Specialist::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function clientHistories()
    {
        return $this->hasMany(ClientHistory::class);
    }
}
