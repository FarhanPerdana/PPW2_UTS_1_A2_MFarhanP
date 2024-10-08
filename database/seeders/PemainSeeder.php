<?php

namespace Database\Seeders;

use App\Models\pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            pemain::create([
                'nama' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 100),
                'posisi' => fake()->sentence(1),
            ]);
        }
    }
}