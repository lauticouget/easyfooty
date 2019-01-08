<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attitude extends Model
{   
    public function user()
    {
        return $this->belongsToOne(User::class);
    }
}
