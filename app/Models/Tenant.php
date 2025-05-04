<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'boarding_house_id',
        'name',
        'contact_number',
        'move_in_date',
        'move_out_date',
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
