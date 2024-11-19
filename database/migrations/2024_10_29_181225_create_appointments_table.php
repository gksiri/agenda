<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('specialist_id');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('tenant_id');

            // Cambios aquí: Campos para start, end y color
            $table->timestamp('start');  // Fecha y hora de inicio de la cita
            $table->timestamp('end');    // Fecha y hora de fin de la cita
            $table->string('color', 20)->nullable(); // Color para el evento (puede ser un color hexadecimal o nombre de color)

            $table->text('comments')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
