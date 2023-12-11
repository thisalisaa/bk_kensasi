<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            DB::table('biodatas')->insert([
                'nisn' => $faker->numberBetween(1000000000, 9999999999),
                'nama' => $faker->name,
                'kelas' => $faker->numberBetween(1, 12),
                'jenis_kelamin' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
                'alamat' => $faker->address,
                'tanggal_lahir' => $faker->date,
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            ]);
        }
    }
}
