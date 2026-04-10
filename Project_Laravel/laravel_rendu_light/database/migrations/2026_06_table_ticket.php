<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {

        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->constrained('projets')->restrictOnDelete();
            $table->foreignId('created_by')->constrained('users')->restrictOnDelete();
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->string('titre', 250);
            $table->text('description')->nullable();
            $table->string('priorite', 50)->default('Moyenne');
            $table->string('statut', 50)->default('Nouveau');
            $table->string('type', 50)->default('Inclus');
            


            $table->unsignedInteger('estimated_minutes')->nullable();
            $table->unsignedInteger('actual_minutes')->default(0);
            $table->timestamp('validated_at')->nullable();
            $table->foreignId('validated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->text('refusal_comment')->nullable();
            $table->timestamps();
        });

    }
 
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
 