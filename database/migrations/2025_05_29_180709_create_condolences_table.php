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
        Schema::create('condolences', function (Blueprint $table) {
            $table->id();
            $table->longText('tribute');
            $table->string('fullName');
            $table->string('email')->nullable()->unique();
            $table->string('ip_address')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condolences');
    }
};
