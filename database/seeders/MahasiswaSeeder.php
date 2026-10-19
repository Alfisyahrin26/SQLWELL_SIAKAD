<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $totalData = 100000; // Target 100.000 data per laptop
        $batchSize = 5000;   // Membagi 5.000 per batch agar cepat dan RAM tidak penuh

        for ($i = 0; $i < ($totalData / $batchSize); $i++) {
            $data = Mahasiswa::factory()->count($batchSize)->make()->toArray();
            Mahasiswa::insert($data);
        }
    }
}