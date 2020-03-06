<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
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
        //
        $faker = Factory::create();

        foreach( range (1, 25) as $index)
        {
        	$user = new User;
        	$user->name = $faker->name;
        	$user->email = $faker->email;
        	$user->password = 'password';
        	$user->save();
        }
    }
}
