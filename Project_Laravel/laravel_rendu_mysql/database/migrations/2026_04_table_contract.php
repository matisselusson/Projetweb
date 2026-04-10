<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {

        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->unique()->constrained('projets')->cascadeOnDelete();
            $table->unsignedInteger('hours_included')->default(0);
            $table->decimal('hourly_rate', 8, 2)->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });

    }
 
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};