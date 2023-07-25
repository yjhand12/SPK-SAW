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
            ['Rata-rata nilai US', 'Benefit', 60],
            ['Buta Warna', 'Cost', 20],
            ['SMK Jurusan Informatika', 'Benefit', 10],
            ['Mempunyai Kartu Indonesia Pintar', 'Benefit', 10],
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
