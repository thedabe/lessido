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
        Schema::create('lessidos', function (Blueprint $table) {
            $table->string('prenom_lessidos');
            $table->string('nom_lessidos');
            $table->string('datenaissance');
            $table->string('pieceIDrecto');
            $table->string('contact_lessidos');
            $table->string('pieceIDverso');
            $table->string('lieu_habitation');
            $table->string('code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessidos');
    }
};
