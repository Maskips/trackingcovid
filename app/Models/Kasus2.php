<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Rw;

class Kasus2 extends Model
{
    protected $fillable = [
        'jpositif',
        'jmeninggal',
        'jsembuh',
        'tanggal',
        'id_rw',
    ];

    public $timestamps = true;
    public function Rw() {
        return $this->belongsTo('App\Models\Rw', 'id_rw');
    }
}

