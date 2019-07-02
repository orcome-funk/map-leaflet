<?php

use App\User;
use App\Outlet;
use Faker\Generator as Faker;

$factory->define(Outlet::class, function (Faker $faker) {

    return [
        'name'       => $faker->word,
        'address'    => $faker->sentence,
        'latitude'   => $faker->latitude(-3.29, -3.35),
        'longitude'  => $faker->longitude(114.56, 114.63),
        'creator_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
