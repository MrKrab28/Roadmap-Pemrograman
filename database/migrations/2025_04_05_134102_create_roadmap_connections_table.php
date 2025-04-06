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
        Schema::create('roadmap_connections', function (Blueprint $table) {
            $table->id();
            $table->string('source')->constrained('nodes');
            $table->string('target')->constrained('nodes');
            $table->foreignId('roadmap_id')->constrained('roadmap');

            $table->timestamps();

            $table->foreign('source')->references('kode')->on('nodes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('target')->references('kode')->on('nodes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roadmap_connections');
    }
};
