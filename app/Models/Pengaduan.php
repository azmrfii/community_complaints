<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pengaduan',
        'masyarakat_id',
        'isi_laporan',
        'foto',
        'status',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function tanggapans()
    {
        return $this->hasMany(Tanggapan::class);
    }
}
