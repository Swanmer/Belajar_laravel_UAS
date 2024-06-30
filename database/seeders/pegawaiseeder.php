<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {
            $jobTitle = $faker->jobTitle;
            
            // Batasi panjang pegawai_jabatan hingga 50 karakter
            if (strlen($jobTitle) > 50) {
                $jobTitle = substr($jobTitle, 0, 50);
            }

            DB::table('pegawai')->insert([
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $jobTitle,
                'pegawai_umur' => $faker->numberBetween(25, 40),
                'pegawai_alamat' => $faker->address,
            ]);
        }
    }
}