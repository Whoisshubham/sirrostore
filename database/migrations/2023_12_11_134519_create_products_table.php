<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sub_category_id')->nullable();
            $table->longText('image')->nullable();
            $table->string('product_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->longText('product_overview')->nullable();
            $table->string('shiping_charge')->default('0');
            $table->longText('accordion')->nullable();
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
