<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispen extends Model
{
    protected $fillable = [
        'nama_siswa',
        'kelas',
        'jurusan',
        'alasan',
        'tujuan',
        'jam_keluar',
        'jam_kembali',
        'status'
    ];
}