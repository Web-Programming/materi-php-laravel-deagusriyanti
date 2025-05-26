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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string("kode_dosen", 6);
            $table->string("nama", 25);
            $table->unsignedBigInteger('prodi_id')->nullable();

            // Foreign key constraint
            $table->foreign('prodi_id')
                ->references('id')
                ->on('prodis') // Perbaiki nama tabel disini
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
