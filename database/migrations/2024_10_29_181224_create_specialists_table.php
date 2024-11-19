<?php

// 2024_10_29_xxxxxx_create_specialists_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistsTable extends Migration
{
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('tenant_id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
    }
    public function down()
{
    Schema::table('specialists', function (Blueprint $table) {
        $table->dropForeign(['branch_id']);
        $table->dropForeign(['specialty_id']);
        $table->dropForeign(['tenant_id']);
    });

    Schema::dropIfExists('specialists');
}
}
