<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\Field;
use App\User;
use App\Score;

class Match extends Model
{
    protected $guarded = [

    ];


    // RELATIONS

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    // -----------------------
    public function team1()
    {
        return $this->belongsTo(Team::class);
    }
    public function team2()
    {
        return $this->belongsTo(Team::class);
    }


    public function score1()
    {
        return $this->belongsTo(Score::class);
    }
    public function score2()
    {
        return $this->belongsTo(Score::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
