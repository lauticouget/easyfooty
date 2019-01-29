<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;
use App\User;
use App\Team;

class Team extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function captain()
    {
        return $this->belongsTo(User::class);
    }

}
