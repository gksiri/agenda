<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->string('name');
            $table->string('rut')->unique(); // Campo para RUT (Registro Único Tributario)
            $table->date('birth_date')->nullable(); // Campo para fecha de nacimiento
            $table->boolean('status')->default(true); // Campo para estado (activo/inactivo)
            $table->string('email')->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->timestamps();

            // Foreign Key to Tenants
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
    }

    public function down()
{
    Schema::dropIfExists('clients');
}

}
