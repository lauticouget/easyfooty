<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Match;
use App\User;

class Field extends Model
{
    protected $fillable = [
        'name',
        'location',
        'adress',
        'photopath',
        'user_id',
    ];

    public function matches() {
        return $this->hasMany(Match::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


//--------------------------------------------------------------


}
