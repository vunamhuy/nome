<?php

use App\User;
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder{

	public function run(){
        $user = [
			[
				'name' => 'admin',
				'email' => 'admin@gmail.com',
				'password' => bcrypt('admin'),
				'address' => 'hanoi',
				'city' => 'city',
				'phone_number' => '987654321'
			]
		];

        \DB::table('users')->insert($user);
	}
}
