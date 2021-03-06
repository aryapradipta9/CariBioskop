<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    protected $fillable=['nama','no_studio','sisa_kapasitas','judul','waktu'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
