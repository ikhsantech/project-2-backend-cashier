<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
          protected $table='stok';
    protected $fillable =[
        'menu_id',
        'jumlah',

];
}
