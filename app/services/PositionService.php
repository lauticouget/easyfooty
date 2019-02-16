<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class PositionService extends Model
{
    protected $positions = ['goalkeeper', 'defender', 'midfielder', 'forward'];

    public function allPositions()
    {
        return $this->positions;
    }
}
