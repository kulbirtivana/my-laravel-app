<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // we can seed specific data directory

        DB::table('tweets')->insert(array(
        	'author' => 'Kulbir',
        	'message' => 'Hello world'
        	));
        DB::table('tweets')->insert(array(
        	'author' => 'Aakriti',
        	'message' => 'Hello worldw',
        	));
        DB::table('tweets')->insert(array(
        	'author' => 'Jenny',
        	'message' => 'Hello world3',
        	));

        /**
        Let's try "Faker" to prepopulate with lots of imaginery data very quickly!

        */

        $faker = Faker\Factory::create();

        foreach(range(1, 25 ) as $index){
        	DB::table( 'tweets')->insert(array(
        		'author' => $faker->name,
        		'message' => $faker->catchphrase
        	));
        }
    }
}
