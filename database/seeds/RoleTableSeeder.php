<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('role')->insert([
            'name' => 'admin'
        ]);
        DB::table('role')->insert([
            'name' => 'supper_user'
        ]);
        DB::table('role')->insert([
            'name' => 'basic_user'
        ]);
        DB::table('role')->insert([
            'name' => 'free_user'
        ]);

    }
}
