<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Match;

class MatchUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $matches = Match::all();

        foreach($matches as $match){
            for($i = 0; $i < 2; $i++)
            $match->users()->attach($users->random()->id);
        }
    }
}
