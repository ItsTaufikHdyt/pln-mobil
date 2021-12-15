<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';
    protected $guarded = [];

    public function jenis_kendaraan()
    {
        return $this->belongsTo(Jenis_kendaraan::class,'jenis_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id'); 
    }
}
