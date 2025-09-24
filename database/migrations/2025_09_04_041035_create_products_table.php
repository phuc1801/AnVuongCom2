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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('real_price');
            $table->integer('quantity')->default(0);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->enum('status', ['out_stock', 'in_stock'])->default('out_stock'); // out_stock, in_stock
            $table->boolean('outline')->default(0);
            $table->string('unit');
            $table->string('slug')->unique();
            $table->string('guarantee')->default('2 năm')->nullable();
            $table->float('rating_avg')->default(0);
            $table->unsignedInteger('rating_count')->default(0);
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
