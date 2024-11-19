<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain')->nullable();
            $table->enum('subscription_type', ['free', 'premium', 'enterprise']);
            $table->integer('amount')->nullable();
            $table->date('bill_date')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('share_clients_across_branches')->default(0); // Nuevo campo de configuración
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
