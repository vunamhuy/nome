<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $countrys = array(
        	'English' => 'English',
        	'Tây Ban Nha' => 'Tây Ban Nha',
        	'Đức' => 'Đức',
        	'Italia' => 'Italia',
        	'Việt Nam' => 'Việt Nam'
        );
        foreach($countrys as $country)
        {
	        DB::table('country')->insert([
	            'name' => $country
	        ]);
	    } 
    }
}
