<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->string('kode_fakultas')->nullable()->primary();
            $table->string('nama_fakultas');

        });
    }

    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
};
