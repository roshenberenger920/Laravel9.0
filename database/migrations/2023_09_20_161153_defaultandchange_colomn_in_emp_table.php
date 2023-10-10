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
        Schema::table('emp', function (Blueprint $table) {
            $table->integer('UserId')->default('000000')->change();
            $table->string('staus');
               });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emp', function (Blueprint $table) {
            $table->string('UserId')->change();
        });
    }
};
