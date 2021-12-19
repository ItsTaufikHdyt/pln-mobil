<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_kendaraan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kendaraan';
    protected $guarded = [];

    public function mobil()
    {
        return $this->hasMany(Mobil::class,'id');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class,'id');
    }
}
