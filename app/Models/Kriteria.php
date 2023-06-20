<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    public $table = "kriteria";

    protected $fillable = [
        'nama', 'sifat', 'bobot'
    ];

    public function subkriteria(){
        return $this->belongsTo( SubKriteria::class, 'sub_kriteria_id', 'id');
    }
}
