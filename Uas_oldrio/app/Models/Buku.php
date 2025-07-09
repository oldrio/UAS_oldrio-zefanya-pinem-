<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function penjualans()
{
    return $this->hasMany(Penjualan::class);
}

public function getTerjualAttribute()
{
    return $this->penjualans->sum('eksemplar');
}

}
