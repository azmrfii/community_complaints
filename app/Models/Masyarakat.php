<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'username',
        'password',
        'telp'
    ];

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class);
    }
}
