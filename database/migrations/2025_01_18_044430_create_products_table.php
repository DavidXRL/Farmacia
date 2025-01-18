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
            $table->id() -> nullable ();
            $table->string('name')-> nullable ();
            $table->text('description')->nullable();
            $table->decimal('sale_price', 10, 2)-> nullable ();
            $table->integer('stock_quantity')-> nullable ();

            $table->foreignId('id_category')->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');

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
