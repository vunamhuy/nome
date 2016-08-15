<?php

use Illuminate\Database\Seeder;

class FileTypeSeeder extends Seeder
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
        $file_types = array(
        	'1' => 'sp',
        	'2' => 'team',
        	'3' => 'new',
        	'4' => 'avatar',
        	'5' => 'normal'
        );
        foreach($file_types as $key=>$file_type)
        {
	        DB::table('file_type')->insert([
	            'name' => $file_type
	        ]);
	    }
    }
}
