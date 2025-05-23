<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'program_studi',
        'angkatan',
    ];
}
