<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;


$factory->define(Company::class, function (Faker $faker) {
    return [
        'identity' => $faker->randomDigit ,
        'nature' => $faker->userName ,
        'trade_name' => $faker->titleMale,
        'email' => $faker->email ,
        'comercial_activity' => $faker->companySuffix,
        'phone' => $faker->phoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'address' => $faker->address,
        'state' => 'ACTIVE',
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});