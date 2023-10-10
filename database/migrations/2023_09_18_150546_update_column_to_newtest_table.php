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
        Schema::table('newtest', function (Blueprint $table) {
            $table->string('Status',100);
            $table->string('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('newtest', function (Blueprint $table) {
            $table->dropColumn('Status');
            $table->dropColumn('address');
        });
    }
};
