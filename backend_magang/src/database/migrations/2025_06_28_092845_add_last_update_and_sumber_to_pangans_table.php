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
        Schema::table('pangans', function (Blueprint $table) {
            $table->timestamp('last_update')->nullable()->after('harga');
            $table->string('sumber')->nullable()->after('last_update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pangans', function (Blueprint $table) {
            $table->dropColumn(['last_update', 'sumber']);
        });
    }
};
