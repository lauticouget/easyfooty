<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
        $lauti = new User([
            'first_name' => 'Lauti',
            'password' =>  Hash::make('asdasd'),
            'email' => 'lauticouget@gmail.com',
            'role' => 'player',
        ]);
        $lauti->save();
    }
}
