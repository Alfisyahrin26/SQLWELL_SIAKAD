<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim'              => fake()->unique()->numerify('##########'),
            'kode_prodi'       => 'SI001',
            'nama_lengkap'     => fake()->name(),
            'angkatan'         => fake()->numberBetween(2020, 2026),
            'status_mahasiswa' => 'Aktif',
            'email'            => fake()->unique()->safeEmail(),
            'no_telepon'       => fake()->numerify('08##########'),
            'alamat'           => fake()->address(),
        ];
    }
}