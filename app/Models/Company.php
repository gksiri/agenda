<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['tenant_id', 'name', 'prefix'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
