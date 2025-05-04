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
        Schema::create('pangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('terbit_pangan_id')->constrained('terbit_pangans')->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('harga')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pangans');
    }
};
