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
        //aggiungo colonna image_id a tabella articles
        Schema::table('articles', function (Blueprint $table) {
            $table->string('image_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('image_id');
        });
    }
};
