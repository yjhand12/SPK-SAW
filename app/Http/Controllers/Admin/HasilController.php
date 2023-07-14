<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\Nilai;

class HasilController extends Controller
{
    public function index()
{
    $mahasiswa = Mahasiswa::get();
    $kriteria = Kriteria::get();
    $nilai = Nilai::select(
        'nilai.id as id',
        'mahasiswa.id as idmahasiswa',
        'kriteria.id as idkriteria',
        'sub_kriteria.id as idsubkriteria',
        'mahasiswa.nama as nama',
        'mahasiswa.nisn as nisn',
        'kriteria.nama as kr',
        'sub_kriteria.bobot as bobot',
        'sub_kriteria.keterangan as keterangan'
    )
        ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'nilai.mahasiswa_id')
        ->leftJoin('kriteria', 'kriteria.id', '=', 'nilai.kriteria_id')
        ->leftJoin('sub_kriteria', 'sub_kriteria.id', '=', 'nilai.sub_kriteria_id')
        ->get();

    $nilaiak = Nilai::select(
        'nilai.id as id',
        'mahasiswa.id as idmahasiswa',
        'kriteria.id as idkriteria',
        'sub_kriteria.id as idsubkriteria',
        'mahasiswa.nama as nama',
        'mahasiswa.nisn as nisn',
        'kriteria.nama as kr',
        'sub_kriteria.bobot as bobot',
        'sub_kriteria.keterangan as keterangan'
    )
        ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'nilai.mahasiswa_id')
        ->leftJoin('kriteria', 'kriteria.id', '=', 'nilai.kriteria_id')
        ->leftJoin('sub_kriteria', 'sub_kriteria.id', '=', 'nilai.sub_kriteria_id')
        ->get();

    // Normalization
    foreach ($mahasiswa as $mhs) {
        $mhsfilter = $nilai->where('idmahasiswa', $mhs->id)->values()->all();

        // Skip mahasiswa yang tidak memiliki nilai
        if (count($mhsfilter) === 0) {
            continue;
        }

        $rates = [];

        foreach ($kriteria as $ik => $k) {
            $rates = $nilaiak->map(function ($item) use ($k) {
                if ($k->id == $item->idkriteria) {
                    return $item->bobot;
                }
            })->toArray();

            $rates = array_values(array_filter($rates));

            if ($k->sifat == 'Benefit') {
                $result = $mhsfilter[$ik]->bobot / max($rates);
                $msg = 'rate ' . $mhsfilter[$ik]->bobot . ' max ' . max($rates) . ' res ' . $result;
            } elseif ($k->sifat == 'Cost') {
                $result = min($rates) / $mhsfilter[$ik]->bobot;
            }
            $result *= $k->bobot;
            $mhsfilter[$ik]->bobot = round($result, 2);
        }
    }

    return view('pages.admin.hasil.index', [
        'mahasiswa' => $mahasiswa,
        'kriteria' => $kriteria,
        'nilai' => $nilai
    ])->with('i', 0);
}

}
