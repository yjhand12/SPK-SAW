<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    public $table = "sub_kriteria";

    protected $fillable = [
        'kriteria_id', 'keterangan', 'sifat', 'bobot'
    ];

    public function kriteria(){
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'sub_kriteria_id');
    }
}
