<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingCar extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'pemilik',
        'nopol',
        'no_telp',
        'jenis_mobil',
        'tanggal_masuk',
        'tanggal_keluar'
    ];

}
