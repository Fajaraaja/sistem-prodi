<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tahun_akademik_', function (Blueprint $table) {
            $table->id('id_tahun_akademik');
            $table->string('tahun');
            $table->enum('ganjil_genap', ['ganjil', 'genap']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahun_akademik_');
    }
};
