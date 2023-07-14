<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    public $table = "hasil";

    protected $fillable = [
        'mahasiswa_id', 'nilai', 'keputusan'
    ];
    public function mahasiswa(){
        return $this->belongsTo( Mahasiswa::class, 'mahasiswa_id', 'id');
    }
}
