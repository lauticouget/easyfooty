<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Field;

class Match extends Model
{
    

// RELACIONES (nelson) ----------------------------------------
    
    public function field() {
        return $this->belongsTohasMany(Field::class);
    }
//--------------------------------------------------------------

=======
use App\Team;
use App\Field;
use App\User;

class Match extends Model
{
    // RELATIONS
>>>>>>> asd
    public function team()
    {
        $this->hasMany(Team::class);
    }

    public function field()
    {
        $this->hasOne(Field::class);
    }

    // -----------------------
    public function team1()
    {
        $team = Team::find($this->team1_id);
        return $team;
    }
    public function team2()
    {
        $team = Team::find($this->team2_id);
        return $team;
    }
<<<<<<< HEAD
    // public function field()
    // {
    //     $field = Field::find($this->field_id);
    //     return $field;
    // }
=======

    /* public function field()
    {
        $field = Field::find($this->field_id);
        return $field;
    } */
>>>>>>> asd
   
    // GUESTS -------------------------------
        public function guest1()
        {
            $guest1 = User::find($this->guest1_id);
            return $guest1;
        }
        
        public function guest2()
        {
            $guest2 = User::find($this->guest2_id);
            return $guest2;
        }
        public function guest3()
        {
            $guest3 = User::find($this->guest3_id);
            return $guest3;
        }
        public function guest4()
        {
            $guest4 = User::find($this->guest4_id);
            return $guest4;
        }
        public function guest5()
        {
            $guest5 = User::find($this->guest5_id);
            return $guest5;
        }
        public function guest6()
        {
            $guest6 = User::find($this->guest6_id);
            return $guest6;
        }
        public function guest7()
        {
            $guest7 = User::find($this->guest7_id);
            return $guest7;
        }
        public function guest8()
        {
            $guest8 = User::find($this->guest8_id);
            return $guest8;
        }
        public function guest9()
        {
            $guest9 = User::find($this->guest9_id);
            return $guest9;
        }
}
