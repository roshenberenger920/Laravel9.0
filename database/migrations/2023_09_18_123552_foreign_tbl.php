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

        Schema::create('para', function (Blueprint $table) {
            $table->id();
            $table->string('nameOne');
            $table->string('made');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
                    });


        Schema::create('company', function (Blueprint $table){
            $table->id();
            $table->string('Brand')->unique();
            $table->timestamp('made');
            $table->rememberToken();
            $table->foreignId('nameOne')->constrained(table:'para', indexName:'para_nameOne');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::disableForeignKeyConstraints();
       /* Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('nameOne');
        });*/
        Schema::DropIfExists('para');
        Schema::DropIfExists('company');
                   }
};
