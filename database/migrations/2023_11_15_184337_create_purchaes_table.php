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
        Schema::create('purchaes', function (Blueprint $table) {
            $table->bigIncrements('purchaes_id');
            $table->string('suppliers_id',50)->nullable();
            $table->string('buying_price',50)->nullable();
            $table->string('selling_price',50)->nullable();
            $table->string('purchaes_quantity',50)->nullable();
            $table->integer('purchaes_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchaes');
    }
};
