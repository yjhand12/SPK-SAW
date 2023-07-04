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
            [['1 - 65', 1], ['66 - 70', 2], ['71 - 75', 3], ['76 - 80', 4], ['81 - 85', 5], ['86 - 90', 6], ['91 - 99', 7]],
            [['Tidak Buta Warna', 1], ['Buta Warna Pascal', 3], ['Buta Warna', 5]],
            [['Teknik Informatika Jaringan', 5], ['Rekayasa Perangkat Lunak', 4], ['Teknologi Elektronika Industri', 3], ['Multimedia/Broadcasting', 2], ['Tidak', 1]], 
            [['Ya', 5], ['Tidak', 1]],
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
