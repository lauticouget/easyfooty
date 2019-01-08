<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Match;
<<<<<<< HEAD
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


    // public function owner()
    // {
    //         $owner = User::find($this->user_id);
    //         return $owner;
=======

class Field extends Model
{
    public function matches()
    {
        return $this->belongsToMany(Match::class);
    }
    public function owner()
    {
            $owner = User::find($this->user_id);
            return $owner;
>>>>>>> asd
         
    // }

// RELACIONES (nelson) ----------------------------------------
    public function matches() {
        return $this->hasMany(Match::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


//--------------------------------------------------------------


}
