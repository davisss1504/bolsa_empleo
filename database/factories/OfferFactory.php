<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'code' => $faker->randomDigit,
        'contact' => $faker->phoneNumber ,
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'contract_type' => $faker->text(rand(32, 10)),
        'position' => $faker->text(rand(32, 10)),
        'broad_field' => $faker->citySuffix,
        'specific_field' => $faker->userName,
        'training_hours' => $faker->text(rand(32, 10)),
        'remuneration' => $faker->text(rand(32, 10)),
        'working_day' => $faker->text(rand(32, 10)),
        'number_jobs' => $faker->text(rand(32, 10)),
        'experience_time' => $faker->text(rand(32, 10)),
        'activities' => $faker->text(rand(400, 300)),
        'start_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
        'finish_date' => $faker->dateTimeThisMonth()->format('Y-m-d'),
        'aditional_information' => $faker->text(rand(400, 300)),
        'province' => $faker->citySuffix ,
        'city' => $faker->city ,
        'state' => 'ACTIVE',
        'company_id' => function () {
            return factory(App\Company::class)->create()->id;
        }
    ];
});
