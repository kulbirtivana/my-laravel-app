<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\User;
use Faker\Factory;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        $users = User::all();
        $numberofUsers = count( $users );
        foreach ( $users as $user ){
        	Team::create(['name' => $faker->word])
        	->users()
        	->attach(rand( 1, $numberofUsers));
        }
    }
}
