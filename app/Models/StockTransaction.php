<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockTransaction extends Model
{
    protected $fillable = ['bag_id', 'type', 'quantity', 'transaction_date'];

    public function bag() {
        return $this->belongsTo(Bag::class);
    }
}
