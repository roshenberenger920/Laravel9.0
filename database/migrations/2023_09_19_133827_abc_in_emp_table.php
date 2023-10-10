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

        Schema::table('last', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('UserName')->Unique();
        });

        Schema::table('emp', function (Blueprint $table) {
            $table->dropColumn('name');
                    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('last', function (Blueprint $table){$table->dropColumn('UserName'); $table->string('name');});
        Schema::table('emp', function (Blueprint $table) {
            $table->String('name',20);
                               });
         }
};
