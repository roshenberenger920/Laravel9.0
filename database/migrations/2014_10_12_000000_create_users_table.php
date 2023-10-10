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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
                    });

                    Schema::create('pare', function (Blueprint $table){
                        $table->id();
                        $table->string('name');
                        $table->integer('NIC')->unique();
                       /* $table->foreignId('email')->constrained();*/
                        $table->timestamp('registered');
                        $table->rememberToken();

                    });


            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
       /* Schema::dropIfExists('para');*/
        Schema::dropIfExists('pare');
        /*Schema::drop('users');*/
    }
};
