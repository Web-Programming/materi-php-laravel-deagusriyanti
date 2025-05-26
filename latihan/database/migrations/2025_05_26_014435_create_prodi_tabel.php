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
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->string("kode_prodi", 6);
            $table->string("nama", 25); // Pindahkan sebelum fakultas_id
            $table->unsignedBigInteger('fakultas_id')->nullable(); // Hapus ->after("nama")

            // Foreign key constraint
            $table->foreign('fakultas_id')
                ->references('id')
                ->on('fakultas')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
