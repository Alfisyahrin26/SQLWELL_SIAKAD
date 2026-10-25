<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $total = 100000;
        $chunkSize = 5000; // Memproses 5.000 data per batch

        for ($i = 0; $i < $total; $i += $chunkSize) {
            $data = User::factory()->count($chunkSize)->make()->toArray();
            
            // Masukkan data secara kolektif
            User::insert($data);
        }
    }
}