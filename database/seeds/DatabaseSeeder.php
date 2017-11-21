<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
        $this->call(FileTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(LeagueTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
