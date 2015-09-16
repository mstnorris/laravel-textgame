<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name'
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
