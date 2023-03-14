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
        Schema::create('curriculo', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 256)->nullable();
            $table->string('last_name', 256)->nullable();
            $table->string('email')->unique();
            $table->boolean('confirmado', true);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculos');
    }
};
