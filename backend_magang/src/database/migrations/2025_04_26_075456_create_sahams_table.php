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
        Schema::create('sahams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terbit_saham_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_saham_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('harga')->default(0);
            $table->integer('harga_perhari')->default(0);
            $table->integer('persen_perhari')->default(0);
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sahams');
    }
};
