<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientHistory extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'branch_id', 'specialty_id', 'tenant_id', 'history_date', 'amount', 'comments'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

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
}
