<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    //
     protected $fillable = [
        'plat_nomor',
        'nama_pemilik',
        'merk_kendaraan',
        'keluhan'
    ];
}
