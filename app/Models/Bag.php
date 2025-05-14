<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
     protected $fillable = ['name', 'brand_id', 'category_id', 'stockQuantity'];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function stockTransactions() {
        return $this->hasMany(StockTransaction::class);
    }
}
