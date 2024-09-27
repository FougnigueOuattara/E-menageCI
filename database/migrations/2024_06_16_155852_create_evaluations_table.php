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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->unique(['evaluator_id', 'evaluated_id']);// Pour éviter les évaluations multiples du même utilisateur
            $table->foreignId('evaluated_id')->nullable()->constrained('users')->onDelete('cascade'); // User evaluated
            $table->foreignId('evaluator_id')->nullable()->constrained('users')->onDelete('cascade'); // User evaluator
            $table->string('comment_title');
            $table->string('evaluator_pseudo');
            $table->string('comments')->nullable();
            $table->double("note")->nullable(); // Evaluation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
