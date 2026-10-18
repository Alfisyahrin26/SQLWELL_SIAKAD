
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->string('kode_prodi', 10)->primary();
            $table->string('kode_fakultas', 10);
            $table->string('nama_prodi', 100);
            $table->string('jenjang', 10);

            $table->foreign('kode_fakultas')
                ->references('kode_fakultas')
                ->on('fakultas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_studi');
    }
};
