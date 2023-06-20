<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa_total = Mahasiswa::count();
        $mahasiswa_rks = Mahasiswa::where('prodi', 'Rekayasa Keamanan Siber')->count();
        $mahasiswa_mm = Mahasiswa::where('prodi', 'Multimedia')->count();
        $mahasiswa_bd = Mahasiswa::where('prodi', 'Bisnis Digital')->count();
        return view('pages.admin.dashboard',[
            'mahasiswa_total' => $mahasiswa_total,
            'mahasiswa_rks' => $mahasiswa_rks,
            'mahasiswa_mm' => $mahasiswa_mm,
            'mahasiswa_bd' => $mahasiswa_bd
        ]);
        
    }
}
