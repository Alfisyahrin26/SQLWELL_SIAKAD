<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numerify('##########'),
            'kode_prodi' => 'SI001',
            'nama_lengkap' => fake()->name(),
            'angkatan' => fake()->numberBetween(2020, 2026),
            'status_mahasiswa' => 'Aktif',
            'email' => fake()->unique()->safeEmail(),
            'no_telepon' => fake()->numerify('08##########'),
            'alamat' => fake()->address(),
        ];
    }
}
