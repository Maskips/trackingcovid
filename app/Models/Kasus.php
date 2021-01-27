<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $fillable = [
        'jpositif',
        'jmeninggal',
        'jsembuh',
        'tanggal',
        'id_negara',
    ];

    public $timestamps = true;
    public function Negara() {
        return $this->belongsTo('App\Negara', 'id_negara');
    }
}
