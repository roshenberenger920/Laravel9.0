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
            $table->renameColumn('UserName','FullName');
            $table->renameColumn('user','UserId');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emp', function (Blueprint $table) {
            $table->renameColumn('FullName','Username');
            $table->renameColumn('UserId','user');
        });
    }
};
