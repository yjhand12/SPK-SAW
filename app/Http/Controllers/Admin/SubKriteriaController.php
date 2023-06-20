<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SubKriteriaRequest;
use App\Http\Controllers\Controller;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

use App\Models\Kriteria;
use App\Http\Controllers\Admin\KriteriaController;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        $data = SubKriteria::with('kriteria')->paginate(2);
        return view('pages.admin.sub-kriteria.index', [
            'subkriteria' => $subkriteria,
            'kriteria' => $kriteria,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        return view('pages.admin.sub-kriteria.create',[
            'kriteria' => $kriteria,
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
        $data = $request->all();
        SubKriteria::create($data);

        return redirect()->route('sub-kriteria.index');
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
        $kriteria = Kriteria::get();
        $subkriteria = SubKriteria::findOrfail($id);


        return view('pages.admin.sub-kriteria.edit',[
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria,
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
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::findOrfail($id);
        $subkriteria->update($data);

        return redirect()->route('sub-kriteria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkriteria = SubKriteria::findOrfail($id);
        $subkriteria->delete();

        return redirect()->route('sub-kriteria.index');
    }
}
