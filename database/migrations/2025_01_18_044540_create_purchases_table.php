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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->date('purchase_date')-> nullable ();
            $table->foreignId('supplier_id')->references('id')->on('suppliers')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('product_id')->references('id')->on('products')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('quantity')-> nullable ();
            $table->decimal('unit_price', 10, 2)-> nullable ();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
