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
        Schema::table('formations', function (Blueprint $table) {
            /*$table->integer('apprenant_id')->unsigned(); 
            $table->foreign('apprenant_id')->references('id')->on('apprenants');*/
            $table->foreignId('apprenant_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('formations', function (Blueprint $table) {
            //$table->dropForeign()
        });
    }
};
