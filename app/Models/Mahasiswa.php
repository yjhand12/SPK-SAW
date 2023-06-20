<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $table = "mahasiswa";

    protected $fillable = [
        'nisn', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'asal_sekolah'
    ];
}
