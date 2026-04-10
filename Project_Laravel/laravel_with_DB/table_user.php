<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {

        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->text('description')->nullable();
            $table->string('priorite', 50)->default('Moyenne');
            $table->string('statut', 50)->default('Nouveau');
            $table->string('type', 50)->default('Inclus');
            $table->text('assigne')->nullable();
            $table->timestamps();

        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
 