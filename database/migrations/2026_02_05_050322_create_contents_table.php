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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('headline')->nullable();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->json('badges')->nullable();
            $table->string('highlight')->nullable();
            $table->json('features')->nullable();
            $table->json('currencies')->nullable();
            $table->foreignId('wallet_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
