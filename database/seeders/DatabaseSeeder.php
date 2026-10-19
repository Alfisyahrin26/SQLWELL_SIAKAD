<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Masukkan data fakultas
        DB::table('fakultas')->insertOrIgnore([
            'kode_fakultas' => 'FAST',
            'nama_fakultas' => 'Fakultas Sains dan Teknologi',
        ]);

        // 2. Masukkan data program studi
        DB::table('program_studi')->insertOrIgnore([
            'kode_prodi' => 'SI001',
            'kode_fakultas' => 'FAST',
            'nama_prodi' => 'Sistem Informasi',
            'jenjang' => 'S1',
        ]);

        // 3. Masukkan data mahasiswa
        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}
