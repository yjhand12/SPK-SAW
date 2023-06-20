<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $table = "nilai";

    protected $fillable = [
        'mahasiswa_id', 'kriteria_id', 'sub_kriteria_id',
    ];

    public function kriteria(){
        return $this->belongsTo( Kriteria::class, 'kriteria_id', 'id');
    }

    public function mahasiswa(){
        return $this->belongsTo( Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function subkriteria(){
        return $this->belongsTo( Subkriteria::class, 'sub_kriteria_id', 'id');
    }
}
