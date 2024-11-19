<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    // Campos que se pueden asignar de manera masiva
    protected $fillable = [
        'name',                    // Nombre comercial o nombre corto de la empresa
        'business_name',           // Razón social
        'address',                 // Dirección completa de la empresa
        'email',                   // Correo electrónico de contacto
        'phone',                   // Teléfono de contacto
        'tax_id',                  // Identificación fiscal (RUT o similar)
        'domain',                  // Dominio personalizado o subdominio
        'subscription_type',       // Tipo de suscripción
        'amount',                  // Monto de facturación
        'bill_date',               // Fecha de facturación o renovación
        'status',                  // Estado (activo/inactivo)
        'share_clients_across_branches', // Configuración de compartición de clientes entre sucursales
    ];

    /**
     * Relación uno a muchos con Company.
     * Un tenant puede tener múltiples compañías.
     */
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    /**
     * Relación uno a muchos con Branch.
     * Un tenant puede tener múltiples sucursales.
     */
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    /**
     * Relación uno a muchos con Specialty.
     * Un tenant puede tener múltiples especialidades.
     */
    public function specialties()
    {
        return $this->hasMany(Specialty::class);
    }

    /**
     * Relación uno a muchos con Specialist.
     * Un tenant puede tener múltiples especialistas.
     */
    public function specialists()
    {
        return $this->hasMany(Specialist::class);
    }

    /**
     * Relación uno a muchos con Client.
     * Un tenant puede tener múltiples clientes.
     */
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    /**
     * Relación uno a muchos con Appointment.
     * Un tenant puede tener múltiples citas.
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Relación uno a muchos con ClientHistory.
     * Un tenant puede tener múltiples historiales de cliente.
     */
    public function clientHistories()
    {
        return $this->hasMany(ClientHistory::class);
    }

    /**
     * Relación uno a muchos con CommissionConfiguration.
     * Un tenant puede tener múltiples configuraciones de comisiones.
     */
    public function commissionConfigurations()
    {
        return $this->hasMany(CommissionConfiguration::class);
    }

    /**
     * Relación uno a muchos con Invoice.
     * Un tenant puede tener múltiples facturas.
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    /**
     * Relación uno a muchos con Payment.
     * Un tenant puede tener múltiples pagos.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
