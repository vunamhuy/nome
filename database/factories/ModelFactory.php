<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => array_rand(array('Iphone 6s'=>'Iphone 6s',
        	'Nokia m9'=>'Nokia m9','Samsung gl s7'=>'Samsung gl s7', 'Sony Experia Z5'=>'Sony Experia Z5'),1),
        'description' => array_rand(array('Iphone 6s'=>'Iphone 6s',
        	'Nokia m9'=>'Nokia m9','Samsung gl s7'=>'Samsung gl s7', 'Sony Experia Z5'=>'Sony Experia Z5'),1),
        'price' => random_int(100, 10000),
        'file_id' => random_int(1, 10),
    ];
});
$factory->define(App\File::class, function (Faker\Generator $faker) {
    return [
        'filename' => array_rand(array('phpA460.tmp.jpg'=>'phpA460.tmp.jpg','php242.tmp.jpg'=>'php242.tmp.jpg', 'php8461.tmp.jpg'=>'php8461.tmp.jpg', 'phpEB02.tmp.jpg'=>'phpEB02.tmp.jpg', 'phpC9F4.tmp.jpg'=>'phpC9F4.tmp.jpg'),1),
        'mime' => 'image/jpeg',
        'original_filename' => 'maxresdefault.jpg',
    ];
});
$factory->define(App\Team::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'leagueID' => random_int(1, 10),
        'file_id' => random_int(1, 10),
    ];
});