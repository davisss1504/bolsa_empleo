<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professional;
use Faker\Generator as Faker;

$factory->define(Professional::class, function (Faker $faker) {
    return [
       /*  'id' */
        'user_id' => $faker -> randomNumber($nbDigits = 2) ,
        'identity'=> $faker -> randomNumber($nbDigits = 9) ,
        'email' => $faker->email,
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'nationality'=> $faker->state,
        'civil_state'=> $faker->randomElement($array = array ('Casado', 'Soltero')),
        'birthdate'=> $faker-> dateTimeBetween($startDate = '-30 years', $endDate = '-20 years', $timezone = null),
        'gender' =>  $faker->randomElement($array = array ('M', 'F')),
        'phone' => $faker->phoneNumber, 
        'address'=> $faker->address,
        'about_me'=> $faker->randomElement($array = array ('test1', 'test2')),
        'state'=> $faker->randomElement($array = array ('Active', 'Inactive')),
     
    ];
});

