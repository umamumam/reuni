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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('halal_bihalal_id')->constrained('halal_bil_halals')->onDelete('cascade');
            $table->string('mc')->nullable();
            $table->string('qori')->nullable();
            $table->string('tahlil')->nullable();
            $table->string('sambutan_panitia')->nullable();
            $table->string('sambutan_tuan_rumah')->nullable();
            $table->string('sambutan_bendahara')->nullable();
            $table->string('mauidhoh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
