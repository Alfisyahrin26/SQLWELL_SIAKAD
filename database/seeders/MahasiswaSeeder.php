<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalData = 100000;
        $batchSize = 5000;

        for ($i = 0; $i < ($totalData / $batchSize); $i++) {
            $data = Mahasiswa::factory()->count($batchSize)->make()->toArray();
            Mahasiswa::insert($data);
        }
    }
}