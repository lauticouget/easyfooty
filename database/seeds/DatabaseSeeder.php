<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);

        $this->call(UsersTableSeeder::class);

        $this->call(TeamsTableSeeder::class);

        $this->call(ScoresTableSeeder::class);

        $this->call(SkillsTableSeeder::class);

        $this->call(AttitudesTableSeeder::class);

        $this->call(FieldsTableSeeder::class);

        $this->call(MatchesTableSeeder::class);
    }
}
