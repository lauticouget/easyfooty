<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function matches()
    {
        $this->belongsToMany(Match::class);
    }
}
