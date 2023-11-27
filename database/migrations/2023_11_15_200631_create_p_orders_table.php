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
        Schema::create('p_orders', function (Blueprint $table) {
            $table->bigIncrements('p_order_id');
            $table->string('purchaes_id',50)->nullable();
            $table->string('product_id',50)->nullable();
            $table->string('buying_price',50)->nullable();
            $table->string('selling_price',50)->nullable();
            $table->string('product_quantity',50)->nullable();
            $table->integer('p_order_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_orders');
    }
};
