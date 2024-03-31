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
        Schema::create('price_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->boolean('type')->nullable();
            $table->boolean('status')->default(false);
            $table->longText('description')->nullable();
            $table->string('badge')->nullable();
            $table->json('features');
            $table->double('price');
            $table->longText('faq')->nullable();
            $table->boolean('has_trial')->default(false);
            $table->unsignedInteger('trial_days')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_plans');
    }
};
