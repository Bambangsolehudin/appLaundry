<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Paket;
use App\Pelanggan;

class Transaction extends Model
{
    protected $guarded = [];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}
