<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\KriteriaRequest;
use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('pages.admin.kriteria.index',[
            'kriteria' => $kriteria ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kriteria,nama',
        ]);

        $currentTotalBobot = Kriteria::sum('bobot');
        $newTotalBobot = $currentTotalBobot + $request->input('bobot');

        if ($newTotalBobot > 100) {
            return redirect()->back()->with('error', 'Total bobot Kriteria melebihi 100! Silahkan periksa kembali bobot pada kriteria.');
        }

        Kriteria::create([
            'nama' => $request->input('nama'),
            'sifat' => $request->input('sifat'),
            'bobot' => $request->input('bobot'),
        ]);

        return redirect()->route('kriteria.index');
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
        $kriteria = Kriteria::findOrFail($id);

        return view('pages.admin.kriteria.edit',[
            'kriteria' => $kriteria,
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
        $data = $request->all();
        $kriteria = Kriteria::findOrfail($id);
        $kriteria->update($data);
        // Calculate the total sum of bobot
    $kriteria = Kriteria::findOrFail($id); // Get the kriteria by ID
    $totalBobot = Kriteria::where('id', '!=', $id)->sum('bobot');
    $inputBobot = $request->input('bobot');

    if ($totalBobot - $kriteria->bobot + $inputBobot > 100) {
        return redirect()->back()->with('error', 'Total bobot Kriteria melebihi 100!');
    }

    // Update the kriteria with the new data
    $kriteria->update($request->all());

        return redirect()->route('kriteria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriteria = Kriteria::findOrfail($id);
        $kriteria->delete();

        return redirect()->route('kriteria.index');
    }
}
