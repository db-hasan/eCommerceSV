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
        Schema::create('subsubcategories', function (Blueprint $table) {
            $table->bigIncrements('subsubcategory_id');
            $table->string('subcategory_id',50)->nullable();
            $table->string('subsubcategory_name',50)->nullable();
            $table->integer('subsubcategory_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsubcategories');
    }
};
