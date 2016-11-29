<?php

use App\Role;
use Illuminate\Database\Seeder;
class RolesTableSeeder extends Seeder{

	public function run(){
        $roles = [
			[
				'id' => 1,
				'name' => 'administrator',
				'slug' => 'administrator'
			]
		];

        \DB::table('roles')->insert($roles);
	}
}
