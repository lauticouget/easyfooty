<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class StrongFootService extends Model
{
    protected $feet = ['lefty', 'righty', 'ambidextrous'];


    public function feet()
    {
        return $this->feet;
    }
}
