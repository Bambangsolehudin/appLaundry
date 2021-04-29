<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Paket extends Model
{
    protected $guarded = [];

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'paket_id', 'id');
    }
}
