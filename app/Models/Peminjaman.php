<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $guarded = [];

    public function jenis_kendaraan()
    {
        return $this->belongsTo(Jenis_kendaraan::class,'jenis_id');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class,'mobil_id');
    }

    public function supir()
    {
        return $this->belongsTo(Supir::class,'supir_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
