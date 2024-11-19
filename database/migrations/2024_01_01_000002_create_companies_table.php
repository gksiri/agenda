<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');
            $table->string('name');
            $table->string('prefix', 50)->nullable();
            $table->string('business_name')->nullable(); // Razón social de la empresa
            $table->string('address')->nullable(); // Dirección completa de la empresa
            $table->string('email')->unique(); // Correo electrónico de contacto
            $table->string('phone')->nullable(); // Teléfono de contacto
            $table->string('tax_id')->nullable(); // Identificación fiscal (RUT o similar)
            $table->boolean('status')->default(1); // Estado (activo/inactivo)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

