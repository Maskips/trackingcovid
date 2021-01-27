<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $fillable = [
        'kode_negara',
        'nama_negara',
    ];

    public $timestamps = true;
    public function Kasus() {
        return $this->hasMany('App\Kasus', 'id_negara');
    }
}