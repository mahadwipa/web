<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table='penyewa';
    protected $primaryKey = 'id_penyewa';
    protected $fillable = ['nama', 'no_identitas', 'jenis_identitas', 'telp', 'alamat'];
}