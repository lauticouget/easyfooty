<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\User;

class TeamUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $teams = Team::all();

        foreach($teams as $team){
            for($i = 0; $i < 5; $i++)
            $team->users()->attach($users->random()->id);
        }
    }
}
