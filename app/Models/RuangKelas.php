<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuangKelas extends Model
{
    protected $fillable = [
        'nama',
        'kode',
        'kapasitas',
        'lokasi',
        'fasilitas',
    ];
}
