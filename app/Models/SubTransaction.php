<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTransaction extends Model
{
    protected $fillable = [
        'transaction_id', 'name', 'amount',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
