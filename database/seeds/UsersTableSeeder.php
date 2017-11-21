<?php

use Illuminate\Database\Seeder;
use App\Role;
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
        $adminRole = Role::whereName('admin')->first();
        $userRole = Role::whereName('user')->first();
        $admin = User::create(array(
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ));

        $admin->assignRole($adminRole);

        $user = User::create(array(
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
        ));
        $user->assignRole($userRole);
    }
}
