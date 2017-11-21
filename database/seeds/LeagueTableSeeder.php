<?php

use Illuminate\Database\Seeder;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $leagues= array(
        	'1' => 'NHA',
        	'2' => 'La liga',
        	'3' => 'Bundesliga',
        	'4' => 'Italia',
        	'5' => 'Việt Nam'
        );
        foreach($leagues as $key=>$league)
        {
	        DB::table('league')->insert([
	            'name' => $league,
	            'countryID' => $key
	        ]);
	    }    
    }
}
