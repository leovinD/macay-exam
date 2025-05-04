<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'owner_name',
        'contact_number',
    ];

    public function rooms() {
        return $this->hasMany(Room::class);
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
