<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
        protected $table='pelanggan';
    protected $fillable =[
        'nama',
        'email',
        'nomor_telepon',
        'alamat',

];
}
