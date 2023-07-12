<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubKriteria;
class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kriteria = \App\Models\Kriteria::all();
        $arr_values = [
            [['1 - 65', 1], ['66 - 70', 2], ['71 - 73', 3], ['74 - 77', 4], ['78 - 80', 5], ['81 - 83', 6], ['84 - 87', 7], ['88 - 90', 8], ['91 - 93', 9], ['94 - 99', 10]],
            [['Tidak Buta Warna', 1], ['Buta Warna Pascal', 3], ['Buta Warna', 5]],
            [['Teknik Informatika Jaringan', 5], ['Rekayasa Perangkat Lunak', 4], ['Multimedia/Broadcasting', 3], ['Tidak', 2]], 
            [['Ya', 5], ['Tidak', 3]],
        ];

        foreach ($kriteria as $key => $kr) {
            foreach ($arr_values[$key] as $values) {
                \App\Models\SubKriteria::create([
                    'keterangan' => $values[0],
                    'bobot' => $values[1],
                    'kriteria_id' => $kr->id,
                ]);
            }
        }
    }
}
