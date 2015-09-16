<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name'
    ];

    public function location() {
        return $this->hasOne(Location::class);
    }

    public function questions() {
        return $this->belongsToMany(Question::class);
    }

    public function answers() {
        return $this->belongsToMany(Answer::class);
    }
}
