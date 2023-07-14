<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\Nilai;
use App\Models\Hasil;

class HasilSeleksiController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        $hasil = Hasil::all();
        return view('pages.user.hasil', [
            'mahasiswa' => $mahasiswa,
            'hasil' => $hasil,
        ]);
    }
}
