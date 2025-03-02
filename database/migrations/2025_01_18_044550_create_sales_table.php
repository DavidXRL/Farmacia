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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('sale_date')-> nullable ();
            $table->foreignId('client_id') -> nullable ();

            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->decimal('total_sale', 10, 2)-> nullable ();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
