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
        Schema::table('paraone', function (Blueprint $table) {
            $table->string('nic');
            $table->integer('contact')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paraone', function (Blueprint $table) {
            $table->dropcolumn('nic');
            $table->dropcolumn('contact');
        });
    }
};
