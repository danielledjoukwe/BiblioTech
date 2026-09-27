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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->string('annee_publication');
            $table->string('image')->nullable();
            $table->string('statut');
            $table->unsignedBigInteger('fk_auteur');
            $table->unsignedBigInteger('fk_category');

            $table->foreign('fk_auteur')->references('id')->on('auteurs')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('fk_category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
