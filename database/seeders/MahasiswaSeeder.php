<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_values = [
            ['00158857266', 'Imam Muhyiddin', 'Wonogiri', '2001-08-27', 'Laki-Laki', 'MAN 2 Klaten'],
            ['0026776753', 'At Tafani Fillah', 'Kab. Semarang', '2002-11-26', 'Laki-Laki', 'SMKN 2 Salatiga'],
            ['0023967273', 'Firdaus Anesta Surya', 'Salatiga', '2002-11-03', 'Laki-Laki', 'SMKN 2 Salatiga'],
            ['0012799577', 'Aditya Eka Pratama', 'Kab. Semarang', '2001-04-23', 'Laki-Laki', 'SMAN 1 Tengaran'],
            ['0032010133', 'Muhamad Eko Alfianto', 'Kab. Semarang', '2003-09-21', 'Laki-Laki', 'SMKN 2 Salatiga'],
            ['0027800898', 'Clarissa Monique Maharani', 'Surakarta', '2002-05-28', 'Perempuan', 'SMAN 6 Surakarta'],
            ['0020194292', 'Nafa Safaroh Shafa Az Zahra', 'Banjarnegara', '2002-03-12', 'Perempuan', 'MA Wathoniyah Islamiyah Kebarongan'],
            ['0040295643', 'Faiz Nesa Aulia Noor', 'Grobogan', '2004-04-19', 'Perempuan', 'SMA Takhassus Al-Quran'],
            ['0030014924', 'Aji Nur Prasetyo', 'Kab. Semarang', '2003-03-24', 'Laki-Laki', 'SMKN 2 Salatiga'],
            ['0027408832', 'Nova Aditya', 'Salatiga', '2002-11-24', 'Laki-Laki', 'SMK Telekomukasi Tunas Harapan'],

            ['0041457977', 'Alfian Yuda Syahputra', 'Nganjuk', '2004-04-21', 'Laki-Laki', 'SMKN 2 Surakarta'],
            ['0041381076', 'Asa Atina Zarra', 'Kab. Semarang', '2004-08-28', 'Perempuan', 'SMKN 1 Atap Tuntang'],
            ['0026140907', 'Arsyad Abdulghani Asrori', 'Semarang', '2002-09-23', 'Laki-Laki', 'SMAN 2 Grabag'],
            ['0043650551', 'Dionisius Lucky Noviantoro', 'Salatiga', '2002-11-28', 'Laki-Laki', 'SMKN 2 Salatiga'],
            ['0039784926', 'Jidar Titahjaya', 'Klaten', '2003-06-29', 'Laki-Laki', 'SMK Muhammadiyah Salatiga'],
            ['0043694887', 'Kanca Dwi Sulistiyo', 'Jakarta', '2004-04-14', 'Laki-Laki', 'SMKN 2 Salatiga'],
            ['0032954011', 'Muhammad Angga Ferdyan', 'Kab. Semarang', '2003-03-11', 'Laki-Laki', 'SMK Muhammadiyah Salatiga'],
            ['0042392155', 'Naufal Indra Permada', 'Salatiga', '2002-05-29', 'Laki-Laki', 'SMAN 3 Salatiga'],
            ['0039524854', 'Sarah Gracia Kapite', 'Piru', '2003-08-04', 'Perempuan', 'SMAN 3 Seram Bagian Barat'],
            ['0032634854', 'Samuel Thomas Latekay', 'Ambon', '2003-04-17', 'Laki-Laki', 'SMKN 3 Ambon'],
            ['0051704763', 'Uun Saifudin', 'Temanggung', '2003-07-15', 'Laki-Laki', 'SMK Bhumi Phala Parakan'],
            ['0014144654', 'Fastabiqa Rizky Novendra', 'Surakarta', '2001-11-09', 'Laki-Laki', 'SMKN Colomadu'],
        ];

        foreach ($arr_values as $value) {
            \App\Models\Mahasiswa::create([
                'nisn' => $value[0],
                'nama' => $value[1],
                'tempat_lahir' => $value[2],
                'tanggal_lahir' => $value[3],
                'jenis_kelamin' => $value[4],
                'asal_sekolah' => $value[5],
            ]);
        }
    }
}
