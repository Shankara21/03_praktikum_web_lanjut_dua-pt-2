<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([

                'nama' => 'Firgi Sotya Izzuddin',
                'jabatan' => 'Mahasiswa',
                'kampus' => 'Politeknik Negeri Malang'

        ]);

        About::create([

                'nama' => 'Muhammad Lazuardi Timur',
                'jabatan' => 'Mahasiswa',
                'kampus' => 'Politeknik Negeri Malang'

        ]);
    }
}
