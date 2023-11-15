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
            $table->integer('purchaes_id',50)->nullable();
            $table->integer('product_id',50)->nullable();
            $table->integer('p_order_quantity',50)->nullable();
            $table->integer('purchaes_price',50)->nullable();
            $table->integer('sales_price',50)->nullable();
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
