<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'boarding_house_id',
        'room_number',
        'room_type',
        'monthly_rent',
    ];

    public function boardingHouse() {
        return $this->belongsTo(BoardingHouse::class);
    }

    public function tenants() {
        return $this->hasMany(Tenant::class);
    }
}
