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
        Schema::create('last', function (Blueprint $table) {
            $table->id();
            $table->string('status',50)->nullable();
            $table->string('name');
            $table->timestamps();
        });

           Schema::create('emp', function (Blueprint $table){
            $table->string('name');
            $table->string('user');
            $table->foreignId('NICNo')->constrained(table:'paraone', indexName:'NICNo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       /* Schema::Table('emp', function (Blueprint $table){$table->dropForeign('NICNo');});*/
        Schema::dropIfExists('emp');
        Schema::dropIfExists('last');

        }
};
