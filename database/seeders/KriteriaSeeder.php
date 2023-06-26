<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_values = [
            ['Rata-rata nilai US', 'Benefit', 0.5],
            ['Buta warna', 'Cost', 0.2],
            ['SMK Jurusan Informatika', 'Benefit', 0.2],
            ['Mempunyai Kartu Indonesia Pintar', 'Benefit', 0,1],
        ];

        foreach ($arr_values as $value) {
            \App\Models\Kriteria::create([
                'nama' => $value[0],
                'sifat' => $value[1],
                'bobot' => $value[2],
            ]);
        }
    }
}
