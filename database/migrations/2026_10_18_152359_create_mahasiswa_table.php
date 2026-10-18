
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 15)->primary();
            $table->string('kode_prodi', 10);
            $table->string('nama_lengkap', 150);
            $table->integer('angkatan');
            $table->string('status_mahasiswa', 20);
            $table->string('email', 100)->unique();
            $table->string('no_telepon', 20)->nullable();
            $table->text('alamat')->nullable();

            $table->foreign('kode_prodi')
                ->references('kode_prodi')
                ->on('program_studi');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
