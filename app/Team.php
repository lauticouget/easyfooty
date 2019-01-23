<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;
use App\User;

class Team extends Model
{

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
