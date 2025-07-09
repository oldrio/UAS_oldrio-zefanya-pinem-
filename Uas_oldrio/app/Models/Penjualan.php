<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
public function buku()
{
    return $this->belongsTo(Buku::class);
}
}
