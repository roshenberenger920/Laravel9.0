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
            $table->dropForeign('NICNo');
            $table->foreignId('UserName')->constrained(table:'last', indexName:'UserName');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emp', function (Blueprint $table) {
            $table->dropForeign('UserName');
           /* $table->foreignId('NICNo');*/
        });
    }
};
