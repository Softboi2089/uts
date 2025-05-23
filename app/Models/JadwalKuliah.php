<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $fillable = [
        'dosen_id',
        'program_studi_id',
        'ruang_kelas_id',
        'mata_kuliah',
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    public function ruangKelas()
    {
        return $this->belongsTo(RuangKelas::class);
    }
}
