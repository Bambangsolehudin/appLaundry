<?php

namespace App;

use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $guarded = [];
    // protected $fillable = ['kode', 'nama', 'nomor_telepon', 'alamat'];

    // public function transaction()
    // {
    //     return $this->hasMany(Transaction::class, 'transactions_id', 'id');
    // }
}
