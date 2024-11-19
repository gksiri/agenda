<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = ['branch_id', 'specialty_id', 'tenant_id', 'name', 'email', 'phone'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
