<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customar_id');
            $table->string('order_id',5)->nullable();
            $table->string('customar_name',50)->nullable();
            $table->string('customar_phone',50)->nullable();
            $table->string('customar_email',50)->nullable();
            $table->string('customar_address',50)->nullable();
            $table->string('customar_city',50)->nullable();
            $table->string('customar_zip',50)->nullable();
            $table->string('shiping_id',50)->nullable();
            $table->string('shiping_address',50)->nullable();
            $table->string('shiping_city',50)->nullable();
            $table->string('shiping_zip',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
