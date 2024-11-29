<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nis' => fake()->numberBetween(2010, 2024),
            'nama' => fake()->name(20),
            'alamat' => fake()->address(),
            'no_telp' => fake()->phoneNumber(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'hobi' => fake()->colorName(),

            //
        ];
    }
}
