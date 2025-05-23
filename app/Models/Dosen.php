<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'email',
        'nama',
        'nip',
        'no_hp',
        'program_studi',
        'status',
        'alamat',
    ];

    public function programStudi()
    {
        return $this->belongsTo(\App\Models\ProgramStudi::class, 'program_studi_id');
    }
}

