<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bioskop extends Model
{
    protected $fillable=['nama_bioskop','kota','alamat','jumlah_studio'];
}
