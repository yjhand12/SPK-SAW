<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NilaiRequest;
use App\Http\Controllers\Controller;
use App\Models\Nilai;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\SubKriteriaController;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::select(
            'nilai.id as id',
            'mahasiswa.id as idmahasiswa',
            'kriteria.id as idkriteria',
            'sub_kriteria.id as idsubkriteria',
            'mahasiswa.nama as nama',
            'mahasiswa.nisn as nisn',
            'kriteria.nama as kr',
            'sub_kriteria.bobot as bobot',
            'sub_kriteria.keterangan as keterangan')
        ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'nilai.mahasiswa_id')
        ->leftJoin('kriteria', 'kriteria.id', '=', 'nilai.kriteria_id')
        ->leftJoin('sub_kriteria', 'sub_kriteria.id', '=', 'nilai.sub_kriteria_id')
        ->get();


        $mahasiswa = Mahasiswa::get();
        $subkriteria = SubKriteria::get();
        $kriteria = Kriteria::get();
        return view('pages.admin.nilai.index',[
            'nilai' => $nilai,
            'kriteria' => $kriteria,
            'mahasiswa' => $mahasiswa,
            'subkriteria' => $subkriteria,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();

        return view('pages.admin.nilai.create',[
            'mahasiswa' => $mahasiswa,
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriteria = Kriteria::get();
        foreach ($kriteria as $kr) {
            $nilai = Nilai::create([
                "mahasiswa_id" => $request->mahasiswa_id,
                "kriteria_id" => $request->kriteria_id = $kr->id,
                "sub_kriteria_id" => $request->input('kriteria')[$kr->id],
            ]);
        }
        return redirect()->route('nilai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::findOrfail($id);
        $mahasiswa = Mahasiswa::get();
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();

        return view('pages.admin.nilai.edit',[
            'mahasiswa' => $mahasiswa,
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria,
            'nilai' => $nilai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nilai::where('mahasiswa_id', $id)->delete();

        return redirect()->route('nilai.index');
    }
}
