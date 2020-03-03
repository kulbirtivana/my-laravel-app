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
        //
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
    }
}
