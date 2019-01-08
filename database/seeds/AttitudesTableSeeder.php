<?php

use Illuminate\Database\Seeder;
use App\Attitude;

class AttitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Attitude::class, 20)->create();
    }
}
