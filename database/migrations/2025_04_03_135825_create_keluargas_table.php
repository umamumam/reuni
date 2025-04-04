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
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->foreignId('status_keluarga_id')->constrained('status_keluargas')->onDelete('cascade');
            $table->integer('anak_ke');
            $table->foreignId('keluarga_id')->nullable()->constrained('keluargas')->onDelete('cascade');
            $table->foreignId('pasangan_id')->nullable()->constrained('keluargas')->onDelete('set null');
            $table->enum('status', ['hidup', 'meninggal']);
            $table->date('tanggal_meninggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluargas');
    }
};
