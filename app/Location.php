<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [


    ];

    public function players() {
        return $this->hasMany(Player::class);
    }

    public function items() {
        return $this->hasMany(Item::class);
    }
}
