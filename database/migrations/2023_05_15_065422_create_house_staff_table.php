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
        Schema::create('house_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employers_id')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('age');
            $table->string('gender',2);
            $table->string('phoneNumber');
            $table->string('nationnality');
            $table->string('city');
            $table->string('quarter');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_staff');
    }
};
