<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer'
    ];

    public function location() {
        return $this->belongsTo(Question::class);
    }
}
